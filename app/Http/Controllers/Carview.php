<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\carousel;
use App\Models\category;
use App\Models\movie;
use Illuminate\Support\Str;

class Carview extends Controller
{
    public function car(){
        $std=carousel::all();
        $stg=movie::all();
        
        return view("index",compact("std","stg"));
    }
    public function news(){
    
        return view("news");
    }
    public function mov(string $id=null){
        
        
        $ubm=movie::all();
      
        return view("single",compact("ubm","id"));
    }
    public function cat(string $ide=null){
    
        $lcm=movie::all();
        return view("genres",compact("lcm","ide"));
    }
    public function sup(string $id=null){
        
        $ubm=movie::all();
        $iem=carousel::all();
       
        return view("single_clone",compact("ubm","iem","id"));
    }
   
    //search controller
    public function search(Request $r){
        $s= $r->search;
        if(isset($s) && $s!=""){
            $object=movie::where("mname","LIKE",$s.'%')->get();
        }
        else{
            $object=DB::table("movies")->pageinate(1);
        }
        $w=$object;
        return view('search_result',compact("w"));
     }
}
