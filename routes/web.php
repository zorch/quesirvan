<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Auth::routes();

  Route::get ('/terminos'         , 'HomeController@terms');
  Route::get ('/register/invite'  , '\App\Http\Controllers\Auth\RegisterController@invite_view');
  Route::post('/register/invite'  , '\App\Http\Controllers\Auth\RegisterController@invite_create');
  Route::get ('/billing'          , 'BillingController@paywall');
  Route::post('/billing/orders'   , 'BillingController@order');
  Route::get ('logout'            , '\App\Http\Controllers\Auth\LoginController@logout');
  Route::get ('/dos'              , 'SendController@get_officials');
  Route::post('/officials/send'   , 'SendController@send_officials');
  Route::get ('/uno'              , 'SendController@get_citizens');
  Route::post('/citizens/send'    , 'SendController@send_citizens');
  Route::get ('/'                 , 'HomeController@index');
  Route::get ('/home'             , 'HomeController@index');


Route::group(['middleware' => ['auth']], function () {

  Route::post('/upload/roster', 'UploadRosterController@upload');

  Route::get ('/dashboard'                  , 'HomeController@dashboard');

  Route::get ('/officials/new'              , 'OfficialsController@form');
  Route::post('/officials'                  , 'OfficialsController@store');
  Route::get('/officials'                   , 'OfficialsController@list');
  Route::delete('/officials/{id}'              , 'OfficialsController@delete');
  Route::put('/officials/{id}'              , 'OfficialsController@update');
  Route::get('/officials/edit/{id}'         , 'OfficialsController@edit');
  Route::post('/officials/{id}/ingredients' , 'OfficialsController@add_ingredient');
});
