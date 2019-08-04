<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get("/add",function(){
	echo "这是第一个用户开发的模块";
});
Route::get("/inserts",function(){
	echo "这是第二个用户开发的用户添加模块";
});