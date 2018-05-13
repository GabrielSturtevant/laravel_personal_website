<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('foo', 'ResumeController@resume')->name('api_foo');

Route::get('person/{email?}', 'ResumeController@person');

Route::get('projects/{id}', 'ResumeController@projects');

Route::get('jobs/{id}', 'ResumeController@jobs');

Route::get('pictures/{id}', 'ResumeController@pictures');
