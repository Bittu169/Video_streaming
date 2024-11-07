<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class myauth extends Controller
{
    public function log(Request $r){
        $n=$r->name;
        // $p=Hash::make($r->pass);
        $p=$r->pass;

        if(Auth::attempt(["name"=>$n,"password"=>$p]) && $n=='admin'){
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
