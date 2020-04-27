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

// ユーザー認証
Auth::routes();

// ルートパス
Route::get('/', 'MessagesController@index')->name('root');

// メッセージ関連
Route::resource('messages', 'MessagesController', ['only' => [
    'index',
]]);

// ユーザー関連
Route::resource('users', 'UsersController', ['only' => [
    'edit', 'update',
]]);

// グループ関連
Route::resource('groups', 'GroupsController', ['only' => [
    'index', 'store', 'create',
]]);
