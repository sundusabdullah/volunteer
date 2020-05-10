<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('volunteer', 'VolunteerController');

// //create form
// Route::get('create/{id}', 'VolunteerController@create');
// //create function
// Route::post('/create', 'VolunteerController@store');

// //edit form
// Route::get('edit/{id}', 'VolunteerController@edit');
// //edit function
// Route::post('edit', 'VolunteerController@update');



