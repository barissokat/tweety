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

// Auth::loginUsingId(1);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/tweets', ['as' => 'home', 'uses' => 'TweetController@index']);
    Route::post('/tweets', ['as' => 'tweets.store', 'uses' => 'TweetController@store']);

    Route::post('/profiles/{user:username}/follow', ['as' => 'profile.follow', 'uses' => 'FollowController@store']);

    Route::get('/explore', ['as' => 'profile.explore', 'uses' => 'ExploreController']);

    Route::group(['middleware' => ['can:edit,user']], function () {
        Route::get('/profiles/{user:username}/edit', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
        Route::patch('/profiles/{user:username}', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
        Route::patch('/profiles/{user:username}/avatar', ['as' => 'profile.avatar', 'uses' => 'ProfileAvatarController@update']);
    });
});

Route::get('/profiles/{user:username}', ['as' => 'profile', 'uses' => 'ProfileController@show']);

// Route::get('/tweets/create', ['as' => 'tweets.create', 'uses' => 'TweetController@create']);
// Route::get('/tweets/{tweet}', ['as' => 'tweets.show', 'uses' => 'TweetController@show']);
// Route::get('/tweets/{tweet}/edit', ['as' => 'tweets.edit', 'uses' => 'TweetController@edit']);
// Route::put('/tweets/{tweet}', ['as' => 'tweets.update', 'uses' => 'TweetController@update']);
// Route::delete('/tweets/{tweet}', ['as' => 'tweets.destroy', 'uses' => 'TweetController@destroy']);
