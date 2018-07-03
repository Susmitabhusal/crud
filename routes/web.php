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
Route::resource('/company','companyController');
Route::resource('/contact','contactController');
Route::resource('/role','RoleController');

Route::get('/', function () {
    return view('welcome');
});//first ko pahila dekhaucha
Route::get('/fashion', function () {
    return view('front.home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', 'contactController@index')->name('index');
Route::get('/user', 'userController@index')->name('index');
Route::get('/user/{id}', 'userController@show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
