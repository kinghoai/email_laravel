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
Route::get('/email', function () {
    return view('email');
});
Route::get('/post/{id}/{name}', function($id, $name){
    return 'this is post number '.$id.' and name '.$name;
});
Route::get('/send/email', 'HomeController@mail');