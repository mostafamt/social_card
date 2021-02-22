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

// Route::get('/', function () {
//     return view('index');
// });


Route::get('/profile', function () {
    return view('profile');
});

Route::get('/add', function () {
    return view('add');
});

Route::get('/', 'PagesController@home');

Route::get('/create', 'PagesController@create');
Route::post('/create', 'PagesController@store');