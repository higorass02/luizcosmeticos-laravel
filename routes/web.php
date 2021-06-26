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

Route::group(['middleware' => 'auth.basic'], function() {
    Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function (){

        Route::get('/','HomeController@index')->name('home');

        Route::prefix('categoria')->name('categoria.')->group(function (){
            Route::get('/','CategoriaController@index')->name('index');
            Route::get('/create','CategoriaController@create')->name('create');
            Route::post('/create','CategoriaController@store')->name('store');
            Route::get('/{categoria}/edit','CategoriaController@edit')->name('edit');
            Route::post('/update/{categoria}','CategoriaController@update')->name('update');
            Route::get('/destroy/{categoria}','CategoriaController@destroy')->name('destroy');
        });

        Route::prefix('products')->name('products.')->group(function (){
            Route::get('/','ProductController@index')->name('index');
            Route::get('/create','ProductController@create')->name('create');
            Route::post('/create','ProductController@store')->name('store');
            Route::get('/{product}/edit','ProductController@edit')->name('edit');
            Route::post('/update/{product}','ProductController@update')->name('update');
            Route::get('/destroy/{product}','ProductController@destroy')->name('destroy');
        });
    });
});

Route::get('/login', 'Auth\LoginController@index')->name('login');
Route::post('/login', 'Auth\LoginController@authenticate')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/register', 'Auth\RegisterController@index')->name('register');
Route::post('/register', 'Auth\RegisterController@create')->name('register');
Route::get('/forget', 'Auth\ResetPasswordController@index')->name('forget');
Route::get('/teste-session', function (\Illuminate\Http\Request $request){
    var_dump($request->session());
    exit();
})->name('testeSession');
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
