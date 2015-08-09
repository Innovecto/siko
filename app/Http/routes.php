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


//Religions
//Route::get('religions', 'ReligionController@index');
//Route::get('religions/create', 'ReligionController@create');
//Route::get('religions/{id}', 'ReligionController@show');
//Route::get('religions/{id}/edit', 'ReligionController@edit');
//Route::post('religions', 'ReligionController@store');
Route::resource('religions', 'ReligionController');

//Locations
Route::get('location', 'LocationController@index');
Route::get('location/create', 'LocationController@create');

//Families
Route::get('family', 'FamilyController@index');
Route::get('family/create', 'FamilyController@create');


//Family Members


//Family Relations



