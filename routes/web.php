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
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

Route::get('/email', function () {
    Mail::to('dbasedown@gmail.com')->send(new ContactMail);

    return new ContactMail();
});

Route::get('/', 'BaseController@home');                 //home
Route::get('/about', 'BaseController@about');           //about
Route::get('/principal', 'BaseController@principal');   //principall

Route::get('/contact', 'SendMailController@index');
Route::post('email/send', 'SendMailController@send');

Route::get('/products', 'ProductsController@index');

Route::get('/underconstruction', function () {
        return view('/underconstruction');
    });
Route::get('/blade', function () {
        return view('/layout/base2');
    });

Route::get('/alan', function () {
        return view('/underconstruction');
    });
Route::get('/bauser', function () {
        return view('/underconstruction');
    });
Route::get('/bnr', function () {
        return view('/underconstruction');
    });
Route::get('/dold', function () {
        return view('/underconstruction');
    });
Route::get('/emh', function () {
        return view('/underconstruction');
    });
Route::get('/leipole', function () {
        return view('/underconstruction');
    });
Route::get('/wharton', function () {
        return view('/underconstruction');
    });
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

Route::get('/gmc', function () {
        return view('/underconstruction');
    });
    Route::get('/a2000', function () {
            return view('/principal/gmc/a2000');
        });

Route::get('/monarch', function () {
        return view('/underconstruction');
    });
    Route::get('/stroboscopes', function () {
            return view('/principal/monarch/stroboscopes');
        });
