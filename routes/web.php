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

Route::get('/auth/login', function () {
    return view('auth.login');
});

Route::get('/user/registro', function () {
    return view('user.registro');
});

Route::get('/user/account', function () {
    return view('user.account');
});

Route::get('/logout', function () {
    return 'Final de Sessio';
});

Route::get('/chat/show', function () {
    return view('chat.show');
});

Route::get('/chat/crear', function () {
    return view('chat.crear');
});

