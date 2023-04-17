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

Route::get('/sia','siacontroller@index');
Route::get('/sia/tambah','siacontroller@tambah');
Route::post('/sia/store','siacontroller@store');
Route::get('/sia/edit/{kd_mkul}','siacontroller@edit');
Route::post('/sia/update','siacontroller@update');
Route::get('/sia/hapus/{kd_mkul}','siacontroller@hapus');
Route::get('/sia/cetak','siacontroller@cetak');