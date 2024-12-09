<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\nthSessionController;
use App\Http\Controllers\nthAccountController;



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
//Test session
Route::get('/nth-session/set',[nthSessionController::class,'nthGetSessionData'])->name('nthsession.set');
Route::get('/nth-session/get', [nthSessionController::class,'nthStoreSessionData'])->name('nthsession.get');
Route::get('/nth-session/del', [nthSessionController::class,'nthDeleteSessionData'])->name('nthsession.del');


//Account
Route::get('/nth-login',[nthAccountController::class,'nthlogin'])->name('nthaccount.nthlogin');
Route::get('/nth-logout',[nthAccountController::class,'nthlogout'])->name('nthaccount.nthlogout');
Route::post('/nth-login',[nthAccountController::class,'nthloginSubmit'])->name('nthaccount.nthloginsubmit');
