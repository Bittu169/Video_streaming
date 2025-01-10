<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class myauth extends Controller
{
    public function regins(Request $r){
      
        $n=$r->name;
        $e=$r->email;
        $p= Hash::make($r->pass);
        $obj=new User();
        $obj->name=$n;
        $obj->email=$e;
        $obj->password=$p;
        $obj->save();
        return redirect(route('login'));
    }

    public function log(Request $r){
        $n=$r->email;
        // $p=Hash::make($r->pass);
        $p=$r->pass;

        if(Auth::attempt(["email"=>$n,"password"=>$p])){
            return redirect(route('index'));
        }
        else{
            return redirect(route('login'))->with("msg","Invalid Login !");
        }
    }
    public function logout(){
        Auth::logout();
        return redirect(route('login'));
    }

    // forget password
    public function show_fogot_pass(){
        return view('forgot_password.forgetpass');
    }
    public function submit_fogot_pass(Request $request){
       
        // Validate the email
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);
        
        // Generate a random token
        $token= Str::random(64);
      
         // Remove any existing reset tokens for this email
        DB::table('password_reset_tokens')->where('email',$request->email)->delete();
        // Insert the new token
        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);
        // Send the reset email
        try {
        Mail::send('forgot_password.email',['token'=> $token], function($message) use ($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        });
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Failed to send email. Please try again.');
    }
     // Redirect to the login page with success message
        return redirect()->route('login');

    }
  

    public function showResetPass(Request $request, $token)
    {
        return view('forgot_password.resetpass', ['token' => $token]);
    }
    

    public function submit_reset_pass(Request $request){
         
        
        // Validate the request
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed', // 'confirmed' means it should match password_confirmation
            'password_confirmation' => 'required',// Corrected type here
        ]);
        // echo $request;
        // dd();
     
        // Check if the password reset token exists in the database
        $updatepass = DB::table('password_reset_tokens') 
        ->where([
            'email'=>$request->email,
            'token'=>$request->token

        ])->first();

         // If no matching token is found, return with an error
        if(!$updatepass){
            return back()->withInput()->with('error','Invalid Token');
        }

        // Update the user's password
        $user= User::where('email', $request->email)->update(['password'=>Hash::make($request->password)]);

        // Delete the used password reset token
        DB::table('password_reset_tokens')->where(['email' => $request->email])->delete();
        
        // Log to check if we're here
       Log::debug('Password reset successful, redirecting to login.');
        
       
       // Now redirect
       return redirect()->route('login');
    
    
    }
    
    
}

