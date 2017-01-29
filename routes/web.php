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



Route::get('/', 'HomeController@getHome');

Route::get('/chat', 'ChatController@getIndex');

Route::get('/auth/login', function () {
    return view('auth.login');
});

Route::get('/user/registro', function () {
    return view('user.registro');
});

Route::get('/user/account', 'ChatController@getAccount');

Route::get('/logout', function () {
    return 'Final de Sessio';
});

Route::get('/chat/show', 'ChatController@getShow');

Route::get('/chat/crear', 'ChatController@getCrear');

Route::get('/chat/edit/{id}', 'ChatController@getEdit');

