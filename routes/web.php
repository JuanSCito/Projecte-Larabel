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

	Route::group(['middleware' => 'auth'], function() {
    
    // ...
    Route::get('/chat', 'ChatController@getIndex');

    Route::get('/chat/show', 'ChatController@getShow');

	Route::get('/chat/crear', 'ChatController@getCrear');

	Route::get('/chat/edit/{id}', 'ChatController@getEdit');

	Route::get('/user/account', 'ChatController@getAccount');

	Route::post('/chat/store', 'chatStore@store');
});



/*Route::get('/auth/login', function () {
    return view('auth.login');
});
*/
/*Route::get('/user/registro', function () {
    return view('user.registro');
});
*/

/*
Route::get('/logout', function () {
    return 'Final de Sessio';
});
*/



Auth::routes();

Route::get('/home', 'HomeController@index');


