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
    return view('user.homepage');
});

Route::get('/register', 'RegistrationController@create')->name('register');
Route::post('register', 'RegistrationController@store')->name('store');

Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

Route::prefix('user')->group(function (){
    Route::get('/','UserController@index')->name('user.index');
    Route::get('/profile', function () {
        return view('user.profile');
    });
    Route::post('/update', 'UserController@update' )->name('user.update');

    Route::get('/logout', function () {
        return view('user.profile');
    });

});

