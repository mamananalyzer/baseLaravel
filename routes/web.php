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





Route::get('/', 'BaseController@home');
Route::get('/about', 'BaseController@about');
Route::get('/principal', 'BaseController@principal');

Route::get('/products', 'ProductsController@index');
Route::get('/acuvim', function () {
        return view('/listofproduct/acuvim');
    });

// contoh menggunakan route sederhana

// Route::get('/', function () {
//     return view('index');
// });

