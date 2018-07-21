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
Route::get('/', function () {
    return view('welcome');
});
/*Route::get('/vlad', function () {
	return view('vlad');
});
Route::get('/index', function () {
    return view('home.index');
});
Route::get('/users/{id}', function ($id) {
    return $id;
});*/
Route::get('/', 'PageController@index');
Route::get('/topic', 'PageController@topic');
Route::get('/topic/nervous', 'PageController@nervous');
Route::get('/topic/respiratory', 'PageController@respiratory');
Route::get('/topic/circulatory', 'PageController@circulatory');
