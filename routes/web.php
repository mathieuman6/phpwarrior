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

    Route::post('friend', 'FriendController@add')->name('friend.add');
    Route::get('friend/accept/{id}', 'FriendController@accept')->name('friend.accept');
    Route::get('friend/refuse/{id}', 'FriendController@refuse')->name('friend.refuse');

    Route::get('conversation', 'ConversationController@index')->name('conversation.index');
});

Route::prefix('test')->group(function () {
    Route::get('', function() {
        return view('home');
    });
});
