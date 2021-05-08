<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;


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
Route::resource('news', NewsController::class)->names('NewsTest');

Route::get('/show', function () {
    return view('show');
    })->name('show-form');
 Route::get('/store', function () {
     return view('store');
    })->name('store-form');
Route::get('/update', function () {
    return view('update');
    })->name('update-form');
