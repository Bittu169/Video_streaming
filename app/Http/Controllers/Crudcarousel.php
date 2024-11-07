<?php

namespace App\Http\Controllers;
use App\Models\carousel;
use Illuminate\Http\Request;

class Crudcarousel extends Controller
{
    public function addcar(){
        return view('addcar');
    }
    public function inscar(Request $r){
        $fl=$r->file("img");
        $fn="";
        if(isset($fl)){
            $fn=time().$fl->getClientOriginalName();
            $fl->move("assets.car_img",$fn);
        }
        $obj=new carousel();
        $obj->name=$r->name;
        $obj->mtype=$r->mtype;
        $obj->description=$r->description;
        $obj->mlink=$r->mlink;
        $obj->image=$fn;
        $obj->save();

        return redirect(route("index"));
    }
    public function selcar(){
        $obj=carousel::all();

        return view("listcar")->with(["std"=>$obj]);
    }
    public function delcar(Request $r){
       
        $id=$r->did;
        $obj=carousel::find($id);
        unlink("assets.car_img/".$obj->image);
        $obj->delete();
        return redirect(route("selcar"));
       }
       public function editcar(Request $r){
        $id=$r->eid;
        $obj=carousel::find($id);
        return view("editcaro")->with(["md"=>$obj]);
       }
       public function updc(Request $r){
        $id=$r->id;
        $fl=$r->file("img");
        $fn="";
        if(isset($fl)){
            $fn=time().$fl->getClientOriginalName();
            $fl->move("assets.car_img",$fn);
        }
        $obj=carousel::find($id);
        $obj->name=$r->name;
        $obj->mtype=$r->mtype;
        $obj->description=$r->description;
        $obj->mlink=$r->mlink;

        if(isset($fn)){
        $obj->image=$fn;
        }
        $obj->update();

        return redirect(route("selcar"));
       }
}

