<?php

use Illuminate\Support\Facades\Route;

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
    $videoUrl = "https://www.youtube.com/watch?v=QeDV5Q1ew_4";
    return view('welcome',['videoUrl' => $videoUrl]);
});
