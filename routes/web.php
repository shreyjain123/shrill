<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where yloaded by the RouteServiceProvider within a group which
| contains the "u can register woare eb routes for your application. These
| routes web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});

Route::post('/submit', 'PostsController@submit');

Auth::routes();

Route::get('/dash', 'HomeController@index')->name('dashboard');

Route::get('/dash', 'HomeController@getPosts');

Route::get('/user_profile', 'HomeController@show_user_profile')->name('user.profile');

Route::post('/user_profile/submit', 'ProfileController@submit');

Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');

Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

Route::get('/admin-dash', 'AdminController@index')->name('admin.dashboard');

Route::get('/admin-dash', 'AdminController@getPosts')->name('admin.dashboard');


