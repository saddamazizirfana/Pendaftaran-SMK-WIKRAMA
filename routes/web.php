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
Route::resource('daftars','DaftarController');
Route::post('daftars/post-daftar','DaftarController@store');

Route::get('/', function () {
    return view('welcome');
});
