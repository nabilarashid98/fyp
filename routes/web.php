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


})->name('main');
//User
Route::get('/register','UserController@register')->name('userregister');

//Main
Route::get('/main','MainController@index')->name('mainpage');

Route::get('/forum/addforum','ForumController@addforum')->name('addforum');
Route::get('/forum/listforum','ForumController@listforum')->name('listforum');
Route::get('/forum/detailforum','ForumController@detailforum')->name('detailforum');
Route::post('/user/store', 'UserController@store')->name('userstore');

//login
Route::post('/login','LoginController@login')->name('login');

//logout
Route::get('/logout','LoginController@logout')->name('logout');