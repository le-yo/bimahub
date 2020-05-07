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
Route::prefix('about')->group(function() {
    Route::get('/', function () {
        return view('about');
    });
    Route::get('/committee', function () {
        return view('about');
    });
});


Route::prefix('bimabox')->group(function() {
    Route::get('/', function () {
        return view('bimabox');
    });
    Route::get('/eligibility', function () {
        return view('eligibility');
    });
    Route::get('/evaluation', function () {
        return view('evaluation');
    });
    Route::get('/application', function () {
        return view('application');
    });
});

Route::prefix('bimalab')->group(function() {
    Route::get('/', function () {
        return view('bimalab');
    });
    Route::get('/innovation', function () {
        return view('innovation');
    });
    Route::get('/insurtech', function () {
        return view('insurtech');
    });
});


Route::get('/regtech', function () {
    return view('regtech');
});


