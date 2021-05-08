<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::group(['namespace'=> 'App\Http\Controllers'], function (){
//     Route::get('news', 'NewsController@index');
// });
// Route::group(['namespace'=> 'App\Http\Controllers'], function (){
//     Route::get('show', 'NewsController@show');
// });
// Route::group(['namespace'=> 'App\Http\Controllers'], function (){
//     Route::get('store', 'NewsController@store');
// });
// Route::group(['namespace'=> 'App\Http\Controllers'], function (){
//     Route::get('update', 'NewsController@update');
// });
// Route::group(['namespace'=> 'App\Http\Controllers'], function (){
//     Route::get('destroy', 'NewsController@destroy');
// });
