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
    return view('medical.home');
});

Route::get('/medical', function () {
    return view('medical.home');
});

Route::get('/medical/dento', function () {
    return view('medical.dento');
})->name('medicalDento');

Route::get('/medical/childcare', function () {
    return view('medical.childcare');
})->name('medicalChildcare');