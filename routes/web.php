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
    return view('packers.demos');
});

Route::get('/packers-movers', function () {
    return view('packers.demos');
});

Route::get('/packers-movers/demo1', function () {
    return view('packers.demo1');
})->name('packer.demo1');

Route::get('/packers-movers/demo2', function () {
    return view('packers.demo2');
})->name('packer.demo2');

Route::get('/packers-movers/demo3', function () {
    return view('packers.demo3');
})->name('packer.demo3');

Route::get('/packers-movers/demo4', function () {
    return view('packers.demo4');
})->name('packer.demo4');

Route::get('/dsunshinepackersandmovers', function () {
    return view('dsunshine');
});