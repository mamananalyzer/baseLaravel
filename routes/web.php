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

Route::get('/', 'BaseController@root');                 //home
// Route::get('/home', 'BaseController@home');                 //home
Route::get('/about', 'BaseController@about');           //about
Route::get('/principal', 'BaseController@principal');   //principal
Route::resource('/cart', 'CartsController');            //cart

Route::get('/contact', 'ContactController@index');     //contact
Route::post('contact/send', 'ContactController@send');  //contact send email
Route::post('email/send', 'SendMailController@send');   //contact send request quote email, insert database
Route::get('email/send', 'SendMailController@reload');   //contact send request quote email, insert database

Route::get('/product', 'DisplaysController@index');             //display page for user searching tool
Route::get('/product/{display}', 'DisplaysController@show');    //display detail individual product

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::group(['middleware' => 'auth'], function () {
    //products
    Route::get('/products', 'ProductsController@index')->middleware('auth');
    Route::get('/products/create', 'ProductsController@create');
    Route::get('/products/{product}', 'ProductsController@show');
    Route::post('/products', 'ProductsController@store');
    Route::delete('/products/{product}', 'ProductsController@destroy');
    Route::get('/products/{product}/edit', 'ProductsController@edit');
    Route::patch('/products/{product}', 'ProductsController@update');

    //brand
    Route::get('/brand', 'BrandsController@index')->middleware('auth');
    Route::get('/brand/create', 'BrandsController@create');
    Route::get('/brand/{categorie}', 'BrandsController@show');
    Route::post('/brand', 'BrandsController@store');
    Route::delete('/brand/{categorie}', 'BrandsController@destroy');
    Route::get('/brand/{categorie}/edit', 'BrandsController@edit');
    Route::patch('/brand/{categorie}', 'BrandsController@update');

    //categorie
    Route::get('/procategorie', 'CategoriesController@index')->middleware('auth');
    Route::get('/procategorie/create', 'CategoriesController@create');
    Route::get('/procategorie/{categorie}', 'CategoriesController@show');
    Route::post('/procategorie', 'CategoriesController@store');
    Route::delete('/procategorie/{categorie}', 'CategoriesController@destroy');
    Route::get('/procategorie/{categorie}/edit', 'CategoriesController@edit');
    Route::patch('/procategorie/{categorie}', 'CategoriesController@update');

    //carts
    Route::get('carts', 'CartsController@index');
    Route::get('/carts/{cart}', 'CartsController@show');
    Route::post('cart/send', 'CartsController@store');
    Route::delete('/carts/{cart}', 'CartsController@destroy');
});

Route::get('/test', function () {
    return view('/test');
});
Route::get('/receipt', function () {
    return view('/receipt2');
});
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
