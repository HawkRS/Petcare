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

Route::prefix('administrar')->group(function () {
  Route::prefix('landing')->group(function () {
    Route::get('/', 'HomeController@index')->name( 'admin.landing' );
    Route::get('/titan', 'ProveedoresController@show')->name( 'admin.show' );
    Route::get('/rocko', 'ProveedoresController@show')->name( 'admin.show' );
  });


  Route::get('/contacto', 'ProveedoresController@show')->name( 'admin.show' );
  Route::get('/encuentranos', 'ProveedoresController@show')->name( 'admin.show' );
  Route::prefix('productos')->group(function () {
    Route::get('/smart-bites', 'ProveedoresController@index')->name( 'admin.list' );
    Route::get('/titan', 'ProveedoresController@show')->name( 'admin.show' );
    Route::get('/rocko', 'ProveedoresController@show')->name( 'admin.show' );
  });
});
