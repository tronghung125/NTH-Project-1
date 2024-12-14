<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\nthSinhVienController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sinhvien', [nthSinhVienController::class, 'nthList'])->name('sinhvien.nthlist');

Route::get('/sinhvien/create', [nthSinhVienController::class, 'nthCreate'])->name('sinhvien.nthcreate');
Route::post('/sinhvien/create', [nthSinhVienController::class, 'nthCreateSubmit'])->name('sinhvien.nthcreatesubmit');