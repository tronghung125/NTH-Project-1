<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\nthKhoaController;
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
//Khoa
Route::get('/khoas',[nthKhoaController::class,'nthGetAllKhoa'])->name('nthkhoa.nthgetallkhoa');

Route::get('/khoas/detail/{makh}',[nthKhoaController::class,'nthGetKhoa'])->name('nthkhoa.nthgetkhoa');

Route::get('/khoas/edit/{makh}',[nthKhoaController::class,'nthEdit'])->name('nthkhoa.nthedit');
Route::post('/khoas/edit',[nthKhoaController::class,'nthEditSubmit'])->name('nthkhoa.ntheditsubmit');

Route::get('/khoas/insert',[nthKhoaController::class,'nthInsert'])->name('nthkhoa.nthinsert');
Route::post('/khoas/insert',[nthKhoaController::class,'nthInsertSubmit'])->name('nthkhoa.nthinsertsubmit');

Route::get('/khoas/delete/{makh}',[nthKhoaController::class,'nthDelete'])->name('nthkhoa.nthdelete');
