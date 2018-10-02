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

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('', 'HomeController@index')->name('index');

    Route::get('friend', 'FriendController@index')->name('friend.index');
    Route::post('friend', 'FriendController@add')->name('friend.add');

    Route::get('conversation', 'ConversationController@index')->name('conversation.index');
});

Route::prefix('test')->group(function () {
    Route::get('', function() {
        return view('home');
    });
});
