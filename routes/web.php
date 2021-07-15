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
|php
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/hi', function () {
//    return 'welcome to laravel ';
//});
//
//Route::get('var/{x?}', function ($x) {
//    return $x;
//});


Route::get('first','App\Http\Controllers\FirstController@show')->middleware('auth');
Route::get('login',function (){
    return 'You do not have authentication';
})->name('login');

Route::get('f', 'App\Http\Controllers\FirstController@showme');

Route::get('welcome','App\Http\Controllers\FirstController@show_view');
Route::get('/',function (){
   return view('welcome2')->with(['name'=>'Ali','age'=>21]);
});
