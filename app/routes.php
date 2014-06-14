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
