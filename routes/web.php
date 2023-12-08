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

Route::get('halo', function () {
    //bisa diisi program apa saja
    return "Halo Apa Kabar";
});

Route::get('halo2', function () {
    return "<h1>Halo Apa Kabar</h1>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('hello', function () {
    return view('hello');
});

Route::get('js1', function () {
    return view('js1');
});

Route::get('js2', function () {
    return view('js2');
});

Route::get('link', function () {
    return view('link');
});

Route::get('responsive1', function () {
    return view('responsive1');
});

Route::get('responsive2', function () {
    return view('responsive2');
});

Route::get('style', function () {
    return view('style');
});

Route::get('tugas-replika-linktree', function () {
    return view('tugas-replika-linktree');
});

Route::get('layout', function () {
    return view('layout');
});

Route::get('bs4-navbar', function () {
    return view('bs4-navbar');
});

// 20231:52100:ES234420:C
Route::get('perkalian', 'App\Http\Controllers\Dosen2Controller@index');
Route::get('biodata', 'App\Http\Controllers\Dosen2Controller@biodata');
Route::get('showjam/{jam}', 'App\Http\Controllers\Dosen2Controller@showtime');

Route::get('formulir', 'App\Http\Controllers\Dosen2Controller@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\Dosen2Controller@proses');

Route::get('/blog', function () {
    return view('home');
});

Route::get('/blog/tentang', function () {
    return view('tentang');
});

Route::get('/blog/kontak', function () {
    return view('kontak');
});

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangBelanjaController@index2');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangBelanjaController@beli');
Route::post('/keranjangbelanja/simpan','App\Http\Controllers\KeranjangBelanjaController@simpan');
Route::get('/keranjangbelanja/batal/{id}','App\Http\Controllers\KeranjangBelanjaController@batal');
