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





Route::delete('/{id}/delete', 'reportController@delete');
Route::get('/tab', 'reportController@tab');


Route::delete('/{id}/hapus', 'ninjaController@delete2');
Route::get('/tab2', 'ninjaController@tab2');



Auth::routes();

Route::post('/', 'reportController@insert')->name('insert')->middleware('auth');

Route::get('/', 'reportController@index')->name('home')->middleware('auth');

 // Route::get('/', 'reportController@tab')->name('admin')->middleware('role:administrator');




