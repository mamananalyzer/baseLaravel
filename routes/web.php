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

Route::get('/underconstruction', function () {
        return view('/underconstruction');
    });
Route::get('/acuvim', function () {
        return view('/listofproduct/acuvim');
    });
Route::get('/acuvimL', function () {
        return view('/listofproduct/acuvimL');
    });
Route::get('/aculink810', function () {
        return view('/listofproduct/aculink810');
    });
Route::get('/AVmeter', function () {
        return view('/listofproduct/AVmeter');
    });
Route::get('/a2000', function () {
        return view('/listofproduct/a2000');
    });
Route::get('/3430', function () {
        return view('/listofproduct/3430');
    });
Route::get('/risheineplus', function () {
        return view('/listofproduct/risheineplus');
    });
Route::get('/stroboscopes', function () {
        return view('/listofproduct/stroboscopes');
    });




// contoh menggunakan route sederhana

// Route::get('/', function () {
//     return view('index');
// });

