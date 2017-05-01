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
/**
Route::get('/', function () {
    return view('welcome');
});
**/
Route::get('/','spiderController@index');
Route::get('/conteudo', function () {
     return view('conteudo');
});

Route::get('/spider','spiderController@index');
/**
Route::get('/spider',function(){
	return view('spiderHome');
});
/**/