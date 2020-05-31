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
    return view('welcome');
});

//home page
Route::get('/home', function() {
    return view('homepage');
});

Route::get('/admin', function() {
    return view('admin');
});

Route::get('/kontak', 'HealthController@indexKontak');
Route::get('/news', 'HealthController@indexBerita');

Route::get('/berita', 'BeritaController@index');
Route::get('/berita/tambah', 'BeritaController@create');
Route::post('/berita', 'BeritaController@store');
Route::get('/berita/{id_berita}/edit', 'BeritaController@edit');
Route::patch('/berita/{id_berita}', 'BeritaController@update');
Route::delete('/berita/{id_berita}', 'BeritaController@destroy');


Route::get('/rs', 'RsController@index');
Route::get('/rs/tambah', 'RsController@create');
Route::post('/rs', 'RsController@store');
Route::get('/rs/{id}/edit', 'RsController@edit');
Route::patch('/rs/{id}', 'RsController@update');
Route::delete('/rs/{id}', 'RsController@destroy');


Route::get('/cc', 'Call_centerController@index');
Route::get('/cc/tambah', 'Call_centerController@create');
Route::post('/cc', 'Call_centerController@store');
Route::get('/cc/{id_kota}/edit', 'Call_centerController@edit');
Route::patch('/cc/{id_kota}', 'Call_centerController@update');
Route::delete('/cc/{id_kota}', 'Call_centerController@destroy');