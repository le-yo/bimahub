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
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/committee', function () {
    return view('about');
});
Route::get('/application', function () {
    return view('application');
});

Route::get('/bimabox', function () {
    return view('bimabox');
});
Route::get('/eligibility', function () {
    return view('eligibility');
});
Route::get('/evaluation', function () {
    return view('evaluation');
});
Route::get('/innovation', function () {
    return view('innovation');
});
Route::get('/insurtech', function () {
    return view('insurtech');
});
Route::get('/regtech', function () {
    return view('regtech');
});

Route::get('/bimalab', function () {
    return view('bimalab');
});
