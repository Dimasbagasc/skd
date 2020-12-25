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

Route::get('/', function () {
    return view('Halamanutama');
});

Route::get('/caesar','CaesarController@index');
Route::get('/vigenere','Halamanutamacontroller@vigenere');
Route::get('/rc4','Halamanutamacontroller@rc4');
Route::get('/history','Halamanutamacontroller@history');

Route::post('/caesar/enkripsi','CaesarController@enkripsi');
Route::post('/caesar/dekripsi','CaesarController@dekripsi');

Route::post('/vigenere/enkripsi','VigenereController@enkripsi');
Route::post('/vigenere/dekripsi','VigenereController@dekripsi');

Route::post('/rc4/enkripsi','Rc4Controller@crypt');
Route::post('/rc4/dekripsi','RcController@decrypt');

Route::get('/history','HistoriController@index');
Route::get('/vigenere','VigenereController@index');


