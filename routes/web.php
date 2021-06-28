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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'SiteController@index')->name('SiteHomePage.index');
Route::get('/loja', 'LojaController@index')->name('store.index');

Route::group(['middleware' => 'auth'], function() {
    Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function (){

        Route::get('/','HomeController@index')->name('home');

        Route::prefix('categorias')->name('categorias.')->group(function (){
            Route::get('/','CategoriaController@index')->name('index');
            Route::get('/create','CategoriaController@create')->name('create');
            Route::post('/create','CategoriaController@store')->name('store');
            Route::get('/{categoria}/edit','CategoriaController@edit')->name('edit');
            Route::post('/update/{categoria}','CategoriaController@update')->name('update');
            Route::get('/destroy/{categoria}','CategoriaController@destroy')->name('destroy');
        });

        Route::prefix('produtos')->name('produtos.')->group(function (){
            Route::get('/','ProductController@index')->name('index');
            Route::get('/create','ProductController@create')->name('create');
            Route::post('/create','ProductController@store')->name('store');
            Route::get('/{produto}/edit','ProductController@edit')->name('edit');
            Route::post('/update/{produto}','ProductController@update')->name('update');
            Route::get('/destroy/{produto}','ProductController@destroy')->name('destroy');
        });
    });
});

/* controle seesão */
/* INICIO */
Route::prefix('login')->name('login.')->group(function (){
//    Route::get('/', 'Auth\LoginController@index')->name('login');
    Route::get('/', 'Auth\LoginController@index')->name('login');
    Route::post('/', 'Auth\LoginController@authenticate')->name('login');
});

Route::prefix('register')->name('register.')->group(function (){
    Route::get('/', 'Auth\RegisterController@index')->name('register');
    Route::post('/', 'Auth\RegisterController@create')->name('register');
});

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/forget', 'Auth\ResetPasswordController@index')->name('forget');
//Auth::routes();
/* FIM */

