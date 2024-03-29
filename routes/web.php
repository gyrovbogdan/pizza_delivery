<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::namespace('App\Http\Controllers')->group(
    function () {
        Route::get('/', 'HomeController@index');
        Route::get('/newProducts', 'HomeController@newProducts');
        Route::get('/delivery', 'HomeController@delivery');
        Route::get('/sertificate', 'HomeController@certificate');
        Route::get('/search', 'HomeController@search');
    }
);
