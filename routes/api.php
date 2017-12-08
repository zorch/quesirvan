<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Initializing Dingo Api package.
$api = app('Dingo\Api\Routing\Router');


$api->version('v1', function ($api) {

    /*
  |--------------------------------------------------------------------------
  | Saving owner user for sign_up (auth not needed)
  |--------------------------------------------------------------------------
  */
  $api->group(['prefix' => 'users'], function ($api) {
    $api->post('/sign_up'     , 'App\Http\Controllers\UsersController@sign_up');
    $api->post('/sign_invite' , 'App\Http\Controllers\UsersController@sign_invite');
  });


      /*
  |--------------------------------------------------------------------------
  | Internal routes for application (all routes need auth)
  |--------------------------------------------------------------------------
  */

    /*BILLING*/
  $api->group(['prefix' => 'billing'], function ($api) {

    $api->post   ('/subscribe'  , 'App\Http\Controllers\BillingController@subscribe');
    $api->post   ('/voucher'    , 'App\Http\Controllers\BillingController@voucher');

  });
  /*BILLING*/

  $api->group(['middleware' => ['jwt.auth', 'language', 'billing']], function ($api) {

    $api->get    ('/test',  'App\Http\Controllers\ProfileController@check_plan');

    $api->get('session', 'App\Http\Controllers\AuthenticateController@session');

    /*USERS*/

    $api->group(['prefix' => 'users'], function ($api) {

      $api->post ('/'         , 'App\Http\Controllers\UsersController@store');
      $api->get  ('/init'     , 'App\Http\Controllers\UsersController@init');
      $api->get  ('/account'  , 'App\Http\Controllers\UsersController@account');
    });

    /*USERS*/

    /*PROFILE*/

    $api->group(['prefix' => 'profile'], function ($api) {

      $api->get    ('/'         , 'App\Http\Controllers\ProfileController@show');
      $api->patch  ('/'         , 'App\Http\Controllers\ProfileController@update');
      $api->post   ('/photo'    , 'App\Http\Controllers\ProfileController@photo');

    });

    /*PROFILE*/

    /*REPORTS*/
    $api->group(['prefix' => 'reports'], function ($api) {

      $api->get    ('/excel'      ,  'App\Http\Controllers\ReportsController@excel');

    });
    /*REPORTS*/

    /*BILLING*/
    $api->group(['prefix' => 'billing'], function ($api) {
      $api->get    ('/payments'    , 'App\Http\Controllers\BillingController@payments');
    });
    /*BILLING*/

    /*WEBHOOKS*/
    $api->group(['prefix' => 'webhooks'], function ($api) {

      $api->post    ('/stripe'      ,  'App\Http\Controllers\WebhooksController@stripe');

    });
    /*WEBHOOKS*/


  });

  /* Routes for user handle, password change, authentication and logout */

  $api->post('auth', 'App\Http\Controllers\AuthenticateController@authenticate');

  $api->post('logout', 'App\Http\Controllers\AuthenticateController@logout');

  $api->get ('token', 'App\Http\Controllers\AuthenticateController@getToken');

  // // Password reset routes...
  $api->post('password/forgot', 'App\Http\Controllers\AuthenticateController@forgot');

  $api->post('password/reset', 'App\Http\Controllers\AuthenticateController@reset');

});
