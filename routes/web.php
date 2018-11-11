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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PageController@index')->name('index');
Route::get('/home', 'PageController@index');
Route::get('/search', 'PageController@search')->name('search');
Route::get('/announcement', 'PageController@announcement')->name('announcement');
Route::get('/submission', 'PageController@submission')->name('submission');
Route::get('/browse', 'PageController@browse')->name('browse');
Route::get('/issue', 'PageController@issue')->name('issue');
Route::get('/detail', 'PageController@detail')->name('detail');
Route::get('/test', 'PageController@test')->name('test');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');

// This is resource controller, if you want to make a CRUD system, just look at it
Route::resource('/template', 'TemplateController');

Route::resource('/posts', 'PostController');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', function() {
        return redirect(route('admin.login'));
    });

    Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'AdminAuth\LoginController@login');
    Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

    Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'AdminAuth\RegisterController@register');

    Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
    Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
    Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
    Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});
