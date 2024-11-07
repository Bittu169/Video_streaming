<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
}

