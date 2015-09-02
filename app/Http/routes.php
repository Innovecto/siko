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

Route::get('/', function () {
	return view('pages/index');
});

//Members
Route::get('member', 'MemberController@index');
Route::get('member/profile/{id}', 'MemberController@show');
Route::get('member/create', 'MemberController@create');

/* Religion Route Group */
Route::group(['as' => 'religion::'], function () {
	Route::get('religion', ['as' => 'index', 'uses' => 'ReligionController@index']);
	Route::get('religion/create', ['as' => 'create', 'uses' => 'ReligionController@create']);
	Route::get('religion/{id}', ['as' => 'show', 'uses' => 'ReligionController@show']);
	Route::get('religion/{id}/edit', ['as' => 'edit', 'uses' => 'ReligionController@edit']);
	Route::post('religion', ['as' => 'store', 'uses' => 'ReligionController@store']);
	Route::post('religion', ['as' => 'update', 'uses' => 'ReligionController@update']);
	Route::delete('religion/{id}/destroy', ['as' => 'destroy', 'uses' => 'ReligionController@destroy']);
});

//Locations
Route::group(['as' => 'location::'], function () {
	Route::get('location', ['as' => 'index', 'uses' => 'LocationController@index']);
	Route::get('location/create', ['as' => 'create', 'uses' => 'LocationController@create']);
});

Route::resource('location', 'LocationController');

//Families
//Route::get('family', 'FamilyController@index');
//Route::get('family/create', 'FamilyController@create');

//Family Members

//Family Relations

Route::get('event', function () {
	return view('event/index');
});

Route::get('event-item', function () {
	return view('event/item');
});

Route::get('timeline', function () {
	return view('timeline/index');
});

Route::group(['as' => 'member::'], function () {
	Route::get('member', ['as' => 'index', 'uses' => 'MemberController@index']);
	Route::get('member/create', ['as' => 'create', 'uses' => 'MemberController@create']);
	Route::get('member/{id}/profile', ['as' => 'profile', 'uses' => 'MemberController@show']);
	Route::get('member/{id}/edit', ['as' => 'edit', 'uses' => 'MemberController@edit']);
	Route::post('member', ['as' => 'store', 'uses' => 'MemberController@store']);
	Route::post('member', ['as' => 'update', 'uses' => 'MemberController@update']);
	Route::delete('member/{id}/destroy', ['as' => 'destroy', 'uses' => 'MemberController@destroy']);
});
