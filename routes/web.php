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

Route::get('/', function () {
	return view('frontend.home.index');
});
Route::get('/user', function () {
	return view('frontend.user.index');
});
Route::get('mybook', function () {
	return view('frontend.user.mybook');
});
Route::get('bookdetail', function () {
	return view('frontend.home.detailbook');
});