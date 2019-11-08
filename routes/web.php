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
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/webCreate', function () {
    return view('webCreate');
});
Route::get('/responsive', function () {
    return view('responsive');
});
Route::get('/re-design', function () {
    return view('re-design');
});

Route::post('/',[
  'uses'=>'ContactMessageController@store', // what action we used
  'as'=>'contact.store' //just rename it
]);
