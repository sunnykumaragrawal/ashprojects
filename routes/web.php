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

/* v34 */
Route::get('/medical/dento', function () {
    return view('medical.dento');
})->name('medicalDento');

/* v35 */
Route::get('/medical/childcare', function () {
    return view('medical.childcare');
})->name('medicalChildcare');

/* v33 */
Route::get('/medical/physiotherapy', function () {
    return view('medical.physiotherapy');
})->name('medicalPhysiotherapy');

/* v32 */
Route::get('/medical/familymedicine', function () {
    return view('medical.familymedicine');
})->name('medicalFamilymedicine');

/* v30 */
Route::get('/medical/dentista', function () {
    return view('medical.dentista');
})->name('medicalDentista');

/* v29 */
Route::get('/medical/chiropractor', function () {
    return view('medical.chiropractor');
})->name('medicalChiropractor');

/* v28 */
Route::get('/medical/pediatrician', function () {
    return view('medical.pediatrician');
})->name('medicalPediatrician');

/* v31 */
Route::get('/medical/demo1', function () {
    return view('medical.demo1');
})->name('medicalDemo1');

/* v27 */
Route::get('/medical/dentcare', function () {
    return view('medical.dentcare');
})->name('medicalDentcare');

/* v26 */
Route::get('/medical/babycare', function () {
    return view('medical.babycare');
})->name('medicalBabycare');