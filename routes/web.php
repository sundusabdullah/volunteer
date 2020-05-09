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
// php artisan serve --port=9005

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/read-more', function (){
    return view ('user/nav/news/read-more');
})->name('read');

Route::get('/admin-dashboard', 'HomeController@dashboard');

Route::post('/updateabout', [
    'uses' => 'AboutController@postSaveAbout',
    'as' => 'about.save'
]);




// inser form
Route::get('insert_comp', 'PageController@insert_comp_form');
// inset Function
Route::post('insert_comp', 'PageController@inset_comp_func')->name('insert_comp');





// // show form
Route::get('show_comp', 'PageController@show_comp_form');
// // show Function
Route::get('show_comp', 'PageController@show_comp_func')->name('show_comp');



Route::get('show_all_info', 'PageController@show_all_info_form');

Route::post('/login', [
    'uses' => 'Auth\LoginController@postLogIn',
    'as'=>'Login'
]);



Route::get('ads/add', function (){
    return view('admin/nav/ads/add');
});

Route::post('ads/add', [
    'uses' => 'AnnouncementController@postSaveAnnouncement',
    'as'=>'announcement.add'
    ]);

/* --Ajax--- */
Route::get('/pagination', 'AnnouncementController@index');

Route::post('pagination/fetch', 'AnnouncementController@fetch')->name('pagination.fetch');
Route::post('pagination/fetch1', 'HomeController@fetch')->name('pagination.fetch1');
