<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\movies;

class crudmovie extends Controller
{
    public function addmov(){
        $obj=Category::all();
        return view('addmovie')->with(["ed"=>$obj]);
    }
    public function insmov(Request $r){

       $fl=$r->file("img");
       $fn="";
       if(isset($fl)){
        $fn=$fl->getClientOriginalName();
        $fl->move('assets/movie_img/',$fn);
       }
        $obj=new movies();
        $obj->mname=$r->mname;
        $obj->mtype=$r->mtype;
        $obj->description=$r->description;
        $obj->image=$fn;
        $obj->mlink=$r->mlink;
        $obj->mprice=$r->mprice;
        $obj->save();

        return redirect(route("index"));
    }
    public function selmov(){
        $obj=movies::all();

        return view("listmovie")->with(["std"=>$obj]);
    }
    public function delmov(Request $r){
       
        $id=$r->did;
        $obj=movies::where("id",$id);
        unlink("assets/movie_img/".$obj->image);
        $obj->delete();
        return redirect(route("selmov"));
       }

       public function editmov(Request $r){
        $id=$r->eid;
        $obj=movies::find($id);
        $obg=Category::all();
        return view("editmovie")->with(["md"=>$obj,"ed"=>$obg]);
       }
       public function updmov(Request $r){

        $fl=$r->file("img");
        $fn="";
        if(isset($fl)){
         $fn=$fl->getClientOriginalName();
         $fl->move('assets/movie_img/',$fn);
        }
        $id=$r->id;
        $obj=movies::find($id);
        $obj->mname=$r->mname;
        $obj->mtype=$r->mtype;
        $obj->description=$r->description;
        if(isset($fn)){
        $obj->image=$fn;
        }
        $obj->mlink=$r->mlink;
        $obj->mprice=$r->mprice;
        $obj->update();

        return redirect(route("selmov"));
       }
}
