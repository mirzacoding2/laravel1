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
    return view('home');
});
 
//User Controller
Route::get('/home', 'UserController@index');
Route::get('/newaccount', 'UserController@account');
Route::post('/new', 'UserController@create');
Route::get('/login', 'UserController@login');
Route::post('/authenticate', 'UserController@loginpost');
Route::get('/dashboard', 'UserController@dashboard');

//Admin Controller
Route::get('/profile', 'AdminController@profile');
Route::get('/address', 'AdminController@address');
Route::get('/phone', 'AdminController@phone');
Route::get('/log', 'AdminController@log');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
