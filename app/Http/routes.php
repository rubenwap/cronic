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

Route::group(['middleware' => 'web'], function () {

  Route::get('/', function () {
      return view('welcome');
  });

Route::auth();

Route::group(['middleware' => 'auth'],function(){

  Route::get('/home', 'HomeController@index');
  Route::resource('articles', 'PagesController');
  Route::resource('events', 'EventsController');
  Route::get('/progress', 'HomeController@progress');
  Route::get('/calfeed', 'HomeController@calfeed');
  Route::get('/latest', 'HomeController@latest');
  Route::get('/oneweek', 'HomeController@oneweek');
    Route::get('/sfeed', 'HomeController@sfeed');
    Route::get('/articlefeed', 'PagesController@articlefeed');
    Route::get('/eventfeed', 'EventsController@eventfeed');
    Route::get('/listsetting', 'HomeController@user_id_setting');


  Route::get('/settings/edit', 'HomeController@editset');
  
   Route::get('/settings', [
    'as' => 'settings', 'uses' => 'HomeController@settings'
]);
  
  
    Route::post('/settings/edit', [
    'as' => 'ep', 'uses' => 'HomeController@settingssave'
]);



});


});
