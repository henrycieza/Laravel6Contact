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
Route::get('contacts/index','ContactController@index')->name('contacts.index');
Route::get('contacts/create','ContactController@create')->name('contacts.create');
Route::post('contacts/post','ContactController@store')->name('contacts.post');

Route::get('contacts/show', 'ContactController@show')->name('contacts.show');
Route::get('contacts/edit/{id}', 'ContactController@edit')->name('contacts.edit');
Route::any('contacts/destroy', 'ContactController@destroy')->name('contacts.destroy');;
