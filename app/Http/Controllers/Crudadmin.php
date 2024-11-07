<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use DB;

class Crudadmin extends Controller
{
    public function addcat(){
        return view('addcategory');
    }
    public function inscat(Request $r){
        $obj=new Category();
        $obj->name=$r->cname;
        $obj->save();

        return redirect(route("index"));
    }
    public function selcat(){
        $obj=Category::all();
  
        return view("listcategory")->with(["std"=>$obj]);
      }
      public function delcat(Request $r){
       
        $cid=$r->did;
        $obj=Category::where("cid",$cid)->delete();
        // $obj->delete();
        return redirect(route("selcat"));
       }
       public function dyn(){
        $result= DB::select(DB::raw("SELECT mtype,COUNT(movies.id) as id FROM movies GROUP BY mtype"));
        $data="";
        foreach($result as $val){
            $data.="['".$val->mtype."',".$val->id."],";
        }
        
        $cdata=$data;
        //  dd($cdata);
        $im=DB::select(DB::raw("SELECT mprice FROM movies"));
        // dd($im);
        $pay="";
        $i=0;$j=0;
        foreach($im as $q){
           if($q->mprice!=0){
               $i+=1;
           }
           else{
            $j+=1;
           }
                
           }
        $fg="['Free',$j],['Paid',$i]";
        // dd($fg);
        return view('index',compact('cdata','fg'));
       }
      
}
