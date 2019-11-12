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
Auth::routes();	
Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>['auth', 'role:admin|member']], function () {    
    // Route diisi disini..
    Route::resource('/kategori','KategoriController');
    Route::resource('/kelas','KelasController');
    Route::resource('/datasiswa', 'DataSiswaController');
    Route::resource('/pertanyaan', 'PertanyaanController');
    Route::resource('/jawaban', 'JawabController');
    Route::get('/datasiswa/store','DataSiswaController@newitem');

    });
