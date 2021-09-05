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


Route::prefix('admin')->group(function () {
    Route::get('login', 'AdminController@login');
    Route::get('logout', 'AdminController@logout');
    Route::post('check', 'AdminController@check');

    Route::group(['middleware'=>'adminMW:admin'],function () {
       
        Route::get('/', 'AdminController@index');
        Route::get('/providers', 'AdminController@providers');
        Route::get('/add_providor', 'AdminController@add_providor');
        Route::post('/store_provider', 'AdminController@store_provider');
       
    
    });
});



Route::prefix('provider')->group(function () {
    

    Route::get('login', 'providerController@login');
    Route::post('check', 'providerController@check');
    Route::get('logout', 'providerController@logout');
    Route::group(['middleware'=>'providerMW:provider'],function () {
       
        Route::get('/', 'providerController@index');
        Route::get('/add_location', 'providerController@add_location');
        Route::post('/store_location', 'providerController@store_location');
       
       
    
    });
});


Route::get('{user_name}.one-app.com', 'providerController@getUserData');

// Route::domain('{domain_name}.localhost::8000')->group(function () {

//     Route::get('/contact', function ($domain_name) {
//     dd($domain_name);
//     })->name('contact');
// });














