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

Route::get('/hello', function () {
    return "HELLO WORLD"; //return string
});

Route::get('/about', function () {
    return view('about', ['name' => 'Học Web Chuẩn']); //return view
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/mycontrol', 'App\Http\Controllers\Mycontroller@index'); //return controller

Route::get('/varwithcontrol', 'App\Http\Controllers\VarWithControl@index');

Route::get('manyvarwithcontrol', 'App\Http\Controllers\ManyVarWithControl@index');
