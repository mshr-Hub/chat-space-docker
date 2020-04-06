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

Route::get('/', 'MessagesController@index')->name('root');
Route::resource('messages', 'MessagesController', ['only' => [
    'index',
]]);
Route::resource('users', 'UsersController', ['only' => [
    'edit', 'update',
]]);
Auth::routes();
