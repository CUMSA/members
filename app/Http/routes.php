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
    Route::get('/', function () {
        return view('welcome');
    });

    // Event attendees routes
    Route::get('event/{event_id}/attendee', ['as' => 'event.attendee.get', 'uses' => 'Events\EventAttendeesController@scanAttendee']);
    Route::post('event/{event_id}/attendee', ['as' => 'event.attendee.post', 'uses' => 'Events\EventAttendeesController@postAttendee']);
    Route::post('event/{event_id}/attendee/{crsid}', ['as' => 'event.attendee.scan', 'uses' => 'Events\EventAttendeesController@scanAttendee']);

    // Authentication Routes...
    Route::get('login', 'Auth\AuthController@showLoginForm');
    Route::get('auth/login', 'Auth\AuthController@showLoginForm');
    Route::post('login', 'Auth\AuthController@login');
    Route::get('logout', 'Auth\AuthController@logout');
    Route::get('auth/logout', 'Auth\AuthController@logout');

    // TODO: Registration Routes...

    // Password Reset Routes...
    $this->get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
    $this->post('password/email', 'Auth\PasswordController@sendResetLinkEmail');
    $this->post('password/reset', 'Auth\PasswordController@reset');

    Route::get('/home', 'HomeController@index');

    Route::get('signup', ['as' => 'member.signup', 'uses' => 'SignupController@show']);
    Route::post('signup', ['as' => 'member.signup.save', 'uses' => 'SignupController@save']);

    Route::get('signup/fresher', ['as' => 'member.signup.fresher', 'uses' => 'SignupController@showFresher']);
    Route::post('signup/fresher', ['as' => 'member.signup.fresher.save', 'uses' => 'SignupController@saveFresher']);
	
	Route::get('/profile', ['as' => 'member.profile', 'uses' => 'Profile\ProfileController@show'])->middleware('auth');
	Route::post('/profile', ['as' => 'member.profile.update', 'uses' => 'Profile\ProfileController@save']);

});

// Committee routes.
Route::group(['middleware' => ['web'], 'prefix' => 'comm/'], function () {
    Route::get('members', ['as' => 'comm.members', 'uses' => 'Committee\MemberController@index']);
});
