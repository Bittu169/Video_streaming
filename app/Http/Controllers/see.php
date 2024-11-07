<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fetch;


class see extends Controller
{
    public function ser(){
        
        $ub=fetch::all();
        return view("series")->with(["std"=>$ub]);
    }
    public function pro(){
        return view("profile");
    }
}
