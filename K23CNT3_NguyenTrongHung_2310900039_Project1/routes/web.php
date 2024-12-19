<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NTH_QUAN_TRIController;
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
Route::get('/admins/nthlogin',[NTH_QUAN_TRIController::class,'nthLogin'])->name('admins.nthLogin');
Route::post('/admins/nthlogin',[NTH_QUAN_TRIController::class,'nthLoginSubmit'])->name('admins.nthLoginSubmit');

