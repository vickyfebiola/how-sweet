<?php

use Illuminate\Support\Facades\Route;

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

// login admin
Route::get('/login', 'AdminController@login')->name('login');
Route::get('/logout', 'AdminController@logout')->name('logout');
Route::post('/login', 'AdminController@process')->name('login.process');

// site admin 
Route::get('/admin', 'AdminController@index' )->name('admin.index')->middleware('login_auth');

// read data admin
Route::get('/admin/data','AdminController@data')->name('admin.data')->middleware('login_auth');

// create data admin
Route::get('/admin/create','AdminController@create')->name('admin.create')->middleware('login_auth');
Route::post('/admin/add','AdminController@store')->name('admin.store')->middleware('login_auth');

// update data admin
Route::get('/admin/edit/{id}','AdminController@edit')->name('admin.edit')->middleware('login_auth');
Route::put('/admin/update/{id}','AdminController@update')->name('admin.update')->middleware('login_auth');

// delete data admin
Route::get('/admin/delete/{id}','AdminController@destroy')->name('admin.destroy')->middleware('login_auth');

// read data content
Route::get('/data','DataController@data')->name('content.data')->middleware('login_auth');

// create data content
Route::get('/data/create','DataController@create')->name('content.create')->middleware('login_auth');
Route::post('/data/add','DataController@store')->name('content.store')->middleware('login_auth');

// update data content
Route::get('/data/edit/{id}','DataController@edit')->name('content.edit')->middleware('login_auth');
Route::put('/data/update/{id}','DataController@update')->name('content.update')->middleware('login_auth');

// delete data content
Route::get('/data/delete/{id}','DataController@destroy')->name('content.destroy')->middleware('login_auth');


// site user
Route::get('/', 'MyController@index' )->name('index');
Route::get('/detail/{id}', 'MyController@detail' )->name('detail');
Route::get('/explore', 'MyController@explore' )->name('explore');


