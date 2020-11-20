<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
// CRUD, Migration-Seeder-Factory, Validation, API using Ajax

// Students route
Route::get('/', 'ViewController@indexPage');
Route::get('/student/create', 'ViewController@showForm')->name('student-create');
Route::get('/student/{id}', 'ViewController@details')->name('student-details');

// Images route
Route::get('/image', 'ViewController@images')->name('image');