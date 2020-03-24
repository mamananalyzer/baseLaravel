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

Route::get('/home', function () {
    return view('/welcome');
});

Route::get('/email', function () {
    Mail::to('dbasedown@gmail.com')->send(new ContactMail);

    return new ContactMail();
});

Route::get('/', 'BaseController@home');                 //home
Route::get('/about', 'BaseController@about');           //about
Route::get('/principal', 'BaseController@principal');   //principall

Route::get('/barang', 'BarangController@index');

Route::get('/products', 'ProductsController@index');
Route::get('/products/create', 'ProductsController@create');
Route::get('/products/{product}', 'ProductsController@show');
Route::post('/products', 'ProductsController@store');
Route::delete('/products/{product}', 'ProductsController@destroy');
Route::get('/products/{product}/edit', 'ProductsController@edit');
Route::patch('/products/{product}', 'ProductsController@update');

// Route::resource('products', 'ProductsController');   //MAGIC

Route::get('/product', 'DisplaysController@index');
Route::get('/product/{display}', 'DisplaysController@show');

Route::get('/contact', 'SendMailController@index');
Route::post('email/send', 'SendMailController@send');

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
