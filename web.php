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
Route::get('/admin', function () {
    return view('admin.dashbord');
});
Route::get('/about', function () {
    return view('about');
});


Route::get('/main', function () {
    return view('admin.main');
});

Route::get('/user', function () {
    return view('admin.user');
});
Route::get('/nav', function () {
    return view('nav');
});
Route::get('/report', function () {
    return view('report');
});
Route::get('/layout', function () {
    return view('layout');
});
Route::get('/sign', function () {
    return view('sign');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/report', function () {
    return view('report');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
