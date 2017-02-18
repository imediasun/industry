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
Route::post('/functions_images', 'FunctionsController@index');
Route::get('/home', 'HomeController@index');
Route::get('/good/{id}', 'GoodController@index')->where('id', '[0-9]+');
Route::get('/cabinet/{id}', 'PrivateCabinetController@index')->where('id', '[0-9]+');
Route::get('/cabinet/orders/{id}', 'PrivateCabinetController@orders')->where('id', '[0-9]+');
Route::get('/cabinet/likes/{id}', 'PrivateCabinetController@likes')->where('id', '[0-9]+');
Route::get('/cabinet/messages/{id}', 'PrivateCabinetController@messages')->where('id', '[0-9]+');
Route::get('/category/{id}', 'CategoryController@index')->where('id', '[0-9]+');
Route::post('/MainController/ajax_usersessions', 'MainController@ajax_usersessions');

Route::get('auth/facebook', 'FacebookController@redirectToProvider')->name('facebook.login');
Route::get('auth/facebook/callback', 'FacebookController@handleProviderCallback');
