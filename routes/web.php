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

//Route::get('/', function () {
//	return view('index');
//});
Route::get('/other', function () {
	return view('other');
})->name('other');

Route::any('/', "\App\Http\Controllers\IndexController@index"); //默认主页

Route::any('/index', "\App\Http\Controllers\IndexController@index")->name('index'); //默认主页
Route::any('/notes', "\App\Http\Controllers\NotesController@index")->name('notes'); //





