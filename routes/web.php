<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello',function(){
    return 'hello';
});
Route::get('/sqltest','sqltestController@unity');
Route::get('/sqlselect','sqltestController@he');
Route::get('/sql','sqltestController@she');
Route::get('/logintest','testController@login');
Route::post('/loginhtest','testController@hlogin');
Route::get('/unityinser','testController@insert');
Route::post('/unityhiser','testController@hisert');
Auth::routes();

Route::get('/home', 'HomeController@index');
