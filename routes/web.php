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
  Route::post('/editar/{id}', 'LandingController@EditSlider')->name( 'landing.edit' );
  Route::post('/editar-contenido', 'LandingController@UpdateContent')->name( 'landing.updatecontent' );
});

Route::prefix('smartbites-perro')->group(function () {
  Route::get('/', 'ProductosController@index')->name( 'productos.page' );
  Route::post('/editar-contenido', 'ProductosController@UpdateContent')->name( 'productos.updatecontent' );
});

Route::prefix('encuentranos')->group(function () {
  Route::get('/', 'MapController@index')->name( 'map.index' );
  Route::get('/editar/{id}', 'MapController@edit')->name( 'findus.edit' );
  Route::post('/guardar/{id}', 'MapController@update')->name( 'findus.update' );
  Route::post('/eliminar/{id}', 'MapController@delete')->name( 'findus.delete' );
  Route::post('/crear', 'MapController@store')->name( 'findus.store' );
});


//Route::get('/contacto', 'HomeController@show')->name( 'admin.show' );
//Route::prefix('productos')->group(function () {
//  Route::get('/smart-bites', 'HomeController@index')->name( 'admin.list' );
//  Route::get('/titan', 'HomeController@show')->name( 'admin.show' );
//  Route::get('/rocko', 'HomeController@show')->name( 'admin.show' );
//});
