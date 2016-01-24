<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', ['as' => 'home', 'uses' => 'PostsController@getHome']);

    Route::get('/posts', ['as' => 'posts', 'uses' => 'PostsController@getPosts']);
    Route::get('/posts/{post}', ['as' => 'post', 'uses' => 'PostsController@getSinglePost']);

    Route::get('/events', ['as' => 'events', 'uses' => 'EventsController@getEvents']);
    Route::get('/event/{event}', ['as' => 'event', 'uses' => 'EventsController@getSingleEvent']);

//    Route::get('/about', ['as' => 'about', 'uses' => 'PostsController@xxx']);
//    Route::get('/contact', ['as' => 'contact', 'uses' => 'PostsController@xxx']);
//    Route::get('/sitemap', ['as' => 'sitemap', 'uses' => 'PostsController@xxx']);

    Route::get('/events/past', ['as' => 'pastEvents', 'uses' => 'EventsController@getPastEvents']);
//    Route::get('/calendar', ['as' => 'calendar', 'uses' => 'EventsController@xxx']);
//    Route::get('/rss', ['as' => 'calendar', 'uses' => 'EventsController@xxx']);
});