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
Route::get('kirimemail', function () {
    \Mail::raw('Hello world', function ($message) {
        $message->to('dbasedown@gmail.com', 'Base');
        $message->subject('Report');
    });
});

Route::post('/sendEmail', 'EmailController@sendEmail');

Route::get('/accuenergy', function () {
        return view('/principal/accuenergy/accuenergy');
    });
    Route::get('/acuvim', function () {
            return view('/principal/accuenergy/acuvim');
        });
    Route::get('/acuvimL', function () {
            return view('/principal/accuenergy/acuvimL');
        });
    Route::get('/aculink810', function () {
            return view('/principal/accuenergy/aculink810');
        });

Route::get('/rishabh', function () {
        return view('/principal/rishabh/rishabh');
    });
    Route::get('/AVmeter', function () {
            return view('/principal/rishabh/AVmeter');
        });
    Route::get('/3430', function () {
            return view('/principal/rishabh/3430');
        });
    Route::get('/risheineplus', function () {
        return view('/principal/rishabh/risheineplus');
        });

Route::get('/gsm', function () {
        return view('/principal/gsm/gsm');
    });
    Route::get('/a2000', function () {
            return view('/principal/gsm/a2000');
        });

Route::get('/monarch', function () {
        return view('/principal/monarch/monarch');
    });
    Route::get('/stroboscopes', function () {
            return view('/principal/monarch/stroboscopes');
        });




// contoh menggunakan route sederhana

// Route::get('/', function () {
//     return view('index');
// });

