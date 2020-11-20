<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. kEnjoy building your API!
|
*/

// Student API routes
Route::get('/students', 'API\StudentController@index');
Route::post('/student/store', 'API\StudentController@store');
Route::get('/student/{id}', 'API\StudentController@show');
Route::post('/student/{id}/update', 'API\StudentController@update');
Route::get('/student/{id}/delete', 'API\StudentController@destroy');

// District / Divison API routes
Route::get('/getdivisions', 'API\DistrictController@getDivisions');
Route::get('/{div_id}/getdistricts', 'API\DistrictController@getDistricts');


// Images API routes
Route::get('/images', 'API\ImageController@index');
Route::post('/images/store', 'API\ImageController@store');