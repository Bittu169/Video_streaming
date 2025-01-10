<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Carview;
use App\Http\Controllers\myauth;
use App\Http\Controllers\see;
use App\Http\Middleware\Authenticate;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/single/{id?}',[Carview::class,"mov"])->name('single')->middleware('auth');

Route::get('/single_clone/{id?}',[Carview::class,"sup"])->name('single_clone')->middleware('auth');

Route::get('/news',[Carview::class,"news"])->name('news')->middleware('auth');

Route::get('/gen/{id?}',[Carview::class,"cat"])->name('genres')->middleware('auth');

Route::get('/series',[see::class,"ser"])->name('series')->middleware('auth');

Route::get('/profile',[see::class,"pro"])->name('pro')->middleware('auth');

Route::get("/",[Carview::class,"car"])->name('index')->middleware('auth');
// Route::get("/gen",[Carview::class,"car"])->name('index');
Route::get('/faq',function(){
    return view('faq');
})->name('faq')->middleware('auth');

Route::get('/contact',function(){
    return view('contact');
})->name('contact')->middleware('auth');


// search 
Route::post("/search",[Carview::class,"search"])->name('search')->middleware('auth');
Route::get('/sr', function () {
        return view('search_result');
    })->name('sresult')->middleware('auth');

// login 
Route::get('/log',function(){
    return view('login');
})->name('login');
Route::post("/logg",[myauth::class,"log"])->name('login_check');

Route::post("/regins",[myauth::class,"regins"])->name('signup');
// logout
Route::post("/logout",[myauth::class,"logout"])->name('logout');

Route::get('/front_page',function(){
    return view('font');
})->name('frontpage');

Route::get("/forgot-pass",[myauth::class,"show_fogot_pass"])->name('auth.forgot');

Route::post("/subimtforgotpass",[myauth::class,"submit_fogot_pass"])->name('auth.submitforgot');

Route::get("/reset-password/{token}",[myauth::class,"showResetPass"])->name('auth.showreset');

// Route::get('/reset-password/{token}', [MyAuthController::class, 'showResetPass'])->name('auth.showreset');




Route::post("/reset-password",[myauth::class,"submit_reset_pass"])->name('auth.submitreset');


