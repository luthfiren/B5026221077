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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/linktree', function () {
    return view('linktree');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/validation', function () {
    return view('validation');
});

Route::get('/testmath', function () {
    return view('testmath');
});

Route::get('/htmlpart1', function () {
    return view('htmlpart1');
});
Route::get('/htmlpart2', function () {
    return view('htmlpart2');
});
Route::get('/htmlpart3', function () {
    return view('htmlpart3');
});

Route::get('/responsive', function () {
    return view('responsive');
});
Route::get('/replace', function () {
    return view('replace');
});

//pegawai
Route::get('perkalian', 'App\Http\Controllers\DosenController@index') ;
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata') ;
Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showjam') ;
Route::post('formulir/proses', 'App\Http\Controllers\DosenController@proses');
Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');
Route::get('pegawai', 'App\Http\Controllers\DosenController@DB');
Route::get('pegawai/tambah', 'App\Http\Controllers\DosenController@tambah');
Route::get('pegawai/view/{id}', 'App\Http\Controllers\DosenController@view');
Route::post('pegawai/store', 'App\Http\Controllers\DosenController@store');
Route::get('pegawai/edit/{id}', 'App\Http\Controllers\DosenController@edit');
Route::post('pegawai/update', 'App\Http\Controllers\DosenController@update');
Route::get('pegawai/hapus/{id}', 'App\Http\Controllers\DosenController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\DosenController@cari');

//nilai kuliah
Route::get('/nilaikuliah','App\Http\Controllers\NilaiKuliahController@index');
Route::get('/nilaikuliah/tambahdata','App\Http\Controllers\NilaiKuliahController@tambah');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiKuliahController@store');

//keranjang belanja
Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangController@indexkeranjangbelanja');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangController@store');
Route::get('/keranjangbelanja/batal/{id}','App\Http\Controllers\KeranjangController@batal');

//beras
Route::get('beras', 'App\Http\Controllers\BerasController@DB');
Route::get('beras/tambah', 'App\Http\Controllers\BerasController@tambah');
Route::post('beras/store', 'App\Http\Controllers\BerasController@store');
Route::get('beras/edit/{id}', 'App\Http\Controllers\BerasController@edit');
Route::post('beras/update', 'App\Http\Controllers\BerasController@update');
Route::get('beras/hapus/{id}', 'App\Http\Controllers\BerasController@hapus');
Route::get('/beras/cari','App\Http\Controllers\BerasController@cari');
Route::get('beras/view/{id}', 'App\Http\Controllers\BerasController@view');
