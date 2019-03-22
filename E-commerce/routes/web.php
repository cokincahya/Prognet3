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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/user/logout', 'Auth\LoginController@logoutUser')->name('user.logout');


Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'admin'], function(){
	Route::get('/login', 'AuthAdmin\LoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'AuthAdmin\LoginController@login')->name('admin.login.submit');
	Route::get('/register', 'AuthAdmin\RegisterController@showRegistrationForm')->name('admin.register');
	Route::post('/register', 'AuthAdmin\RegisterController@register')->name('admin.register.submit');
	Route::get('/logout', 'AuthAdmin\LoginController@logout')->name('admin.logout');
	Route::get('/', 'AdminController@index')->name('admin.home');

});

Route::get('/admin', 'AdminController@index')->name('admin.home');