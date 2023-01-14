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
Route::prefix('blog')->group(function () {
  Route::get('/', 'PostController@index')->name( 'post.index' );
  Route::get('/{slug}', 'PostController@show')->name( 'post.show' );
});

Route::prefix('post')->group(function () {
  Route::get('/', 'BlogController@index')->name( 'blog.index' );
  Route::get('/crear', 'BlogController@create')->name( 'blog.create' );
  Route::post('/crear/guardar', 'BlogController@store')->name( 'blog.store' );
  Route::get('/{id}/mostrar', 'BlogController@show')->name( 'blog.show' );
  Route::get('/{id}/editar', 'BlogController@edit')->name( 'blog.edit' );
  Route::post('/{id}/actualizar', 'BlogController@update')->name( 'blog.update' );
  Route::post('/{id}/eliminar', 'BlogController@delete')->name( 'blog.delete' );
  Route::get('/publicar/{id}', 'BlogController@PublishToggle')->name( 'blog.togglepublish' );
});

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
});

Route::prefix('smartbites-gato')->group(function () {
  Route::get('/banner', 'ProductosController@VistaSBGato')->name( 'smartbitesgato.banners' );
  Route::post('/banner-editar-imagenes', 'EditorController@UpdateContent')->name( 'smartbitesgato.updatecontent' );
  Route::post('/banner-editar-titulos', 'EditorController@UpdateProdBannerTxt')->name( 'smartbitesgato.updatebannertitle' );
  Route::get('/presentaciones', 'ProductosController@VistaSBGatoPresentaciones')->name( 'smartbitesgato.presentaciones' );
  Route::post('/presentaciones-editar', 'EditorController@EditPresentationContent')->name( 'smartbitesgato.updatepresentacion' );
  Route::get('/beneficios', 'ProductosController@VistaSBGatoBeneficios')->name( 'smartbitesgato.beneficios' );
  Route::post('/beneficios-editar/{section}', 'EditorController@EditBenefitsContent')->name( 'smartbitesgato.updatebeneficios' );
});

Route::prefix('titan')->group(function () {
  Route::get('/banner', 'ProductosController@VistaSBTitan')->name( 'titan.banners' );
  Route::post('/banner-editar-imagenes', 'EditorController@UpdateContent')->name( 'titan.updatecontent' );
  Route::post('/banner-editar-titulos', 'EditorController@UpdateProdBannerTxt')->name( 'titan.updatebannertitle' );
  Route::get('/presentaciones', 'ProductosController@VistaSBTitanPresentaciones')->name( 'titan.presentaciones' );
  Route::post('/presentaciones-editar', 'EditorController@EditPresentationContent')->name( 'titan.updatepresentacion' );
  Route::get('/beneficios', 'ProductosController@VistaSBTitanBeneficios')->name( 'titan.beneficios' );
  Route::post('/beneficios-editar/{section}', 'EditorController@EditBenefitsContent')->name( 'titan.updatebeneficios' );
});

Route::prefix('rocko')->group(function () {
  Route::get('/banner', 'ProductosController@VistaSBRocko')->name( 'rocko.banners' );
  Route::post('/banner-editar-imagenes', 'EditorController@UpdateContent')->name( 'rocko.updatecontent' );
  Route::post('/banner-editar-titulos', 'EditorController@UpdateProdBannerTxt')->name( 'rocko.updatebannertitle' );
  Route::get('/presentaciones', 'ProductosController@VistaSBRockoPresentaciones')->name( 'rocko.presentaciones' );
  Route::post('/presentaciones-editar', 'EditorController@EditPresentationContent')->name( 'rocko.updatepresentacion' );
  Route::get('/beneficios', 'ProductosController@VistaSBRockoBeneficios')->name( 'rocko.beneficios' );
  Route::post('/beneficios-editar/{section}', 'EditorController@EditBenefitsContent')->name( 'rocko.updatebeneficios' );
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


  Route::get('/blog/entrada-del-blog', 'PublicController@index');
