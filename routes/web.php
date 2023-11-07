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

Route::get('perkalian', 'App\Http\Controllers\DosenController@index') ;
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata') ;


