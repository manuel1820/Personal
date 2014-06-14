<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

Route::get('loguear', 'AuthController@showLogin');

Route::post('login', 'AuthController@postLogin');

Route::get('logout', 'AuthController@logOut');

Route::get('/', function() {
    return View::make('pages.home');
});

Route::get('admin-user', array('uses' => 'AdminController@index', 'before' => 'auth'));
Route::get('register-user', array('uses' => 'AdminController@register', 'before' => 'auth'));
Route::post('store-user', array('uses' => 'AdminController@store', 'before' => 'auth'));

Route::get('user', array('uses' => 'UsuarioController@index', 'before' => 'auth'));
Route::get('generar', array('uses' => 'UsuarioController@generar', 'before' => 'auth'));
Route::get('carrusel', array('uses' => 'UsuarioController@carrusel', 'before' => 'auth'));

Route::get('admin-worker', array('uses' => 'TrabajadorController@index', 'before' => 'auth'));
Route::get('admin-create-worker', array('uses' => 'TrabajadorController@create', 'before' => 'auth'));
Route::post('admin-store-worker', array('uses' => 'TrabajadorController@store', 'before' => 'auth'));
Route::get('admin-edit-worker', array('uses' => 'TrabajadorController@edit', 'before' => 'auth'));

Route::get('admin-create-contract', array('uses' => 'ContratoController@create', 'before' => 'auth'));
Route::post('admin-store-contract', array('uses' => 'ContratoController@store', 'before' => 'auth'));

Route::get('admin-create-family', array('uses' => 'FamilyController@create', 'before' => 'auth'));
Route::post('admin-store-family', array('uses' => 'FamilyController@store', 'before' => 'auth'));

Route::get('admin-sig', array('uses' => 'SigController@index', 'before' => 'auth'));
Route::get('admin-create-ficha', array('uses' => 'SigController@create', 'before' => 'auth'));
Route::post('admin-store-ficha', array('uses' => 'SigController@store', 'before' => 'auth'));
Route::get('admin-buscar-ficha', array('uses' => 'FichaController@buscar', 'before' => 'auth'));
Route::post('admin-buscar-ficha', array('uses' => 'FichaController@buscar', 'before' => 'auth'));

Route::get('admin-create-ocupante', array('uses' => 'SigController@createocupante', 'before' => 'auth'));
Route::post('admin-store-ocupante', array('uses' => 'SigController@storeocupante', 'before' => 'auth'));

Route::get('admin-create-terreno', array('uses' => 'SigController@createterreno', 'before' => 'auth'));
Route::post('admin-store-terreno', array('uses' => 'SigController@storeterreno', 'before' => 'auth'));

Route::get('admin-create-construccion', array('uses' => 'SigController@createconst', 'before' => 'auth'));
Route::post('admin-store-construccion', array('uses' => 'SigController@storeconst', 'before' => 'auth'));

Route::get('admin-create-doc', array('uses' => 'SigController@createdocume', 'before' => 'auth'));
Route::post('admin-store-doc', array('uses' => 'SigController@storedocume', 'before' => 'auth'));

Route::get('admin-create-social', array('uses' => 'SigController@createsocial', 'before' => 'auth'));
Route::post('admin-store-social', array('uses' => 'SigController@storesocial', 'before' => 'auth'));

Route::get('admin-create-value', array('uses' => 'SigController@createvalue', 'before' => 'auth'));
Route::post('admin-store-value', array('uses' => 'SigController@storevalue', 'before' => 'auth'));

Route::get('admin-mapa', array('uses' => 'MapaController@index', 'before' => 'auth'));
Route::get('admin-mapa2', array('uses' => 'MapaController@zoom1', 'before' => 'auth'));
