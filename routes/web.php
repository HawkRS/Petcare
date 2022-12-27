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
})->name('landing');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('landing')->group(function () {
  Route::get('/', 'LandingController@index')->name( 'landing.page' );
  Route::post('/editar/{id}', 'LandingController@EditSlider')->name( 'landing.edit' );
  Route::post('/editar-contenido', 'LandingController@UpdateContent')->name( 'landing.updatecontent' );
});

Route::prefix('smartbites-perro')->group(function () {
  Route::get('/banner', 'ProductosController@VistaSBPerro')->name( 'smartbites.banners' );
  Route::post('/banner-editar-imagenes', 'EditorController@UpdateContent')->name( 'smartbites.updatecontent' );
  Route::post('/banner-editar-titulos', 'EditorController@UpdateProdBannerTxt')->name( 'smartbites.updatebannertitle' );
  Route::get('/presentaciones', 'ProductosController@VistaSBPerroPresentaciones')->name( 'smartbites.presentaciones' );
  Route::post('/presentaciones-editar', 'EditorController@EditPresentationContent')->name( 'smartbites.updatepresentacion' );
  Route::get('/beneficios', 'ProductosController@VistaSBPerroBeneficios')->name( 'smartbites.beneficios' );
  Route::post('/beneficios-editar/{section}', 'EditorController@EditBenefitsContent')->name( 'smartbites.updatebeneficios' );


  Route::get('/', 'ProductosController@smartbitesperro')->name( 'smartbites.page' );
});

Route::prefix('smartbites-gato')->group(function () {
  Route::get('/', 'SmartbitesController@index')->name( 'smartbitesgato.page' );
  Route::post('/editar-imagenes', 'SmartbitesController@UpdateContent')->name( 'smartbitesgato.updatecontent' );
  Route::post('/editar-titulos', 'SmartbitesController@UpdateProdBannerTxt')->name( 'smartbitesgato.updatebannertitle' );
  Route::post('/editar-presentaciones', 'SmartbitesController@EditPresentationContent')->name( 'smartbitesgato.updatepresentacion' );
  Route::post('/editar-beneficios', 'SmartbitesController@EditBenefitsContent')->name( 'smartbitesgato.updatebeneficios' );
});

Route::prefix('titan')->group(function () {
  Route::get('/', 'TitanController@index')->name( 'titan.page' );
  Route::post('/editar-imagenes', 'TitanController@UpdateContent')->name( 'titan.updatecontent' );
  Route::post('/editar-titulos', 'TitanController@UpdateProdBannerTxt')->name( 'titan.updatebannertitle' );
  Route::post('/editar-presentaciones', 'TitanController@EditPresentationContent')->name( 'titan.updatepresentacion' );
  Route::post('/editar-beneficios', 'TitanController@EditBenefitsContent')->name( 'titan.updatebeneficios' );
});

Route::prefix('rocko')->group(function () {
  Route::get('/', 'RockoController@index')->name( 'rocko.page' );
  Route::post('/editar-imagenes', 'RockoController@UpdateContent')->name( 'rocko.updatecontent' );
  Route::post('/editar-titulos', 'RockoController@UpdateProdBannerTxt')->name( 'rocko.updatebannertitle' );
  Route::post('/editar-presentaciones', 'RockoController@EditPresentationContent')->name( 'rocko.updatepresentacion' );
  Route::post('/editar-beneficios', 'RockoController@EditBenefitsContent')->name( 'rocko.updatebeneficios' );
});


Route::prefix('encuentranos')->group(function () {
  Route::get('/', 'MapController@index')->name( 'map.index' );
  Route::get('/editar/{id}', 'MapController@edit')->name( 'findus.edit' );
  Route::post('/guardar/{id}', 'MapController@update')->name( 'findus.update' );
  Route::post('/eliminar/{id}', 'MapController@delete')->name( 'findus.delete' );
  Route::post('/crear', 'MapController@store')->name( 'findus.store' );
});


Route::prefix('usuarios')->group(function () {
  Route::get('/', 'UsersController@index')->name( 'users.index' );
  Route::post('/crear', 'UsersController@store')->name( 'users.add' );
  Route::get('/editar/{id}', 'UsersController@edit')->name( 'users.edit' );
  Route::post('/editar/{id}/guardar', 'UsersController@update')->name( 'users.update' );
  Route::post('/eliminar/{id}', 'UsersController@delete')->name( 'users.delete' );
});
