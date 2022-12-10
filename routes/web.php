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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('landing')->group(function () {
  Route::get('/', 'LandingController@index')->name( 'landing.page' );
  Route::get('/editar', 'LandingController@edit')->name( 'landing.edit' );
  Route::post('/guardar', 'LandingController@storeSlider')->name( 'landing.storeslider' );
});

Route::prefix('encuentranos')->group(function () {
  Route::get('/', 'MapController@index')->name( 'map.index' );
  Route::get('/editar/{id}', 'MapController@edit')->name( 'findus.edit' );
  Route::post('/guardar/{id}', 'MapController@store')->name( 'findus.store' );
});


//Route::get('/contacto', 'HomeController@show')->name( 'admin.show' );
//Route::prefix('productos')->group(function () {
//  Route::get('/smart-bites', 'HomeController@index')->name( 'admin.list' );
//  Route::get('/titan', 'HomeController@show')->name( 'admin.show' );
//  Route::get('/rocko', 'HomeController@show')->name( 'admin.show' );
//});