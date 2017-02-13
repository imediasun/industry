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
Route::get('/', 'MainController@index');
Route::get('/admin', 'AdminController@index');
Route::get('/admin/customers_registration', 'AdminController@customers_registration');
Route::get('/admin/add_good', 'AdminController@add_good');
/*Route::get('/', function () {
    return view('index');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/category/{id}', 'CategoryController@index')->where('id', '[0-9]+');
Route::post('/MainController/ajax_usersessions', 'MainController@ajax_usersessions');

Route::get('auth/facebook', 'FacebookController@redirectToProvider')->name('facebook.login');
Route::get('auth/facebook/callback', 'FacebookController@handleProviderCallback');
