<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\Crudadmin;
use App\Http\Controllers\crudmovie;
use App\Http\Controllers\Crudcarousel;
use App\Http\Controllers\myauth;
use App\Http\Middleware\Authenticate;




Route::get("/",[Crudadmin::class,"dyn"])->name('index')->middleware('auth');

Route::get('/listcate', function () {
    return view('listcategory');
});


// working of Crudadmin controller 
Route::get("/addc",[Crudadmin::class,"addcat"])->name('addcat')->middleware('auth');
Route::post("/insc",[Crudadmin::class,"inscat"])->name('insertc')->middleware('auth');
Route::get("/selc",[Crudadmin::class,"selcat"])->name('selcat')->middleware('auth');
Route::get("/delc/{did}",[Crudadmin::class,"delcat"])->middleware('auth');



// working of crudmovie controller 
Route::get("/addm",[crudmovie::class,"addmov"])->name('addmov')->middleware('auth');
Route::post("/insm",[crudmovie::class,"insmov"])->name('insertm')->middleware('auth');
Route::get("/selm",[crudmovie::class,"selmov"])->name('selmov')->middleware('auth');
Route::get("/delm/{did}",[crudmovie::class,"delmov"])->name('delmovie')->middleware('auth');
Route::get("/edm/{eid}",[crudmovie::class,"editmov"])->name('editmovie')->middleware('auth');
Route::post("/updm",[crudmovie::class,"updmov"])->name('updatem')->middleware('auth');


// Working of Crudcarousel controller 
Route::get("/addcar",[Crudcarousel::class,"addcar"])->name('addcar')->middleware('auth');
Route::post("/inscar",[Crudcarousel::class,"inscar"])->name('insertcar')->middleware('auth');
Route::get("/selcar",[Crudcarousel::class,"selcar"])->name('selcar')->middleware('auth');
Route::get("/delcar/{did}",[Crudcarousel::class,"delcar"])->name('delcar')->middleware('auth');
Route::get("/edc/{eid}",[Crudcarousel::class,"editcar"])->name('editcar')->middleware('auth');
Route::post("/updc",[Crudcarousel::class,"updc"])->name('updatec')->middleware('auth');


//working of myauth controller
Route::get('/log', function () {
    return view('login');
})->name('login');
Route::post("/logg",[myauth::class,"log"])->name('login_check');

//logout
Route::post("/logout",[myauth::class,"logout"])->name('logout');



