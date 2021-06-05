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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','doktercontroller@index')->name('pasien');
Route::get('/tambahdata','doktercontroller@tambahdata')->name('tambah-dokter154');
Route::get('/search','doktercontroller@search')->name('search');
Route::get('/edit','doktercontroller@edit')->name('edit');
Route::get('/update','doktercontroller@update')->name('update');
Route::get('/destroy','doktercontroller@destroy')->name('destroy');