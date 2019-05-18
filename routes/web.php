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

Route::get('/', function() {
    return view('index');
});
Route::get('/profile', function() {
    return view('profile');
});
Route::get('/skill', function() {
    return view('skill');
});

Route::group(['middleware' => ['administrator']], function(){
    Route::get('/articles/create', function() {
        return view('blogCreate');
    });
    Route::get('/articles/edit/{id}', 'BlogController@edit');
    Route::post('/articles/delete', 'BlogController@delete');
    Route::post('/articles/store', 'BlogController@store');
});
Route::get('/articles', 'BlogController@readAll');
Route::get('/articles/{id}', 'BlogController@read');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
