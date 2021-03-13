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

// Route::get('/customers', 'CustomerController@index')->middleware('auth');

Route::get('/customers', 'CustomerController@index');

Route::post('/customers', 'CustomerController@store');

Route::get('/customers/create', 'CustomerController@create');

Route::get('/customers/search_by_phone', 'CustomerController@search_by_phone');

Route::post('/customers/search_by_phone', 'CustomerController@results_by_phone');

Route::get('/customers/search_by_name', 'CustomerController@search_by_name');

Route::post('/customers/search_by_name', 'CustomerController@results_by_name');

Route::get('/customers/search_advanced', 'CustomerController@search_advanced');

Route::post('/customers/search_advanced', 'CustomerController@results_advanced');

Route::get('/customers/trash', 'CustomerController@indexTrash');

Route::get('/customers/trash/{id}/restore', 'CustomerController@restore');

Route::get('/customers/trash/{id}/deleteforever', 'CustomerController@deleteForever');

Route::get('/customers/{id}', 'CustomerController@show');

Route::put('/customers/{id}', 'CustomerController@update');

Route::delete('/customers/{id}', 'CustomerController@destroy');

Route::get('/customers/{id}/edit', 'CustomerController@edit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
