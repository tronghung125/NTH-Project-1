<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NTH_QUAN_TRIController;
use App\Http\Controllers\NTH_LOAI_SAN_PHAMController;
use App\Http\Controllers\NTH_SAN_PHAMController;

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

//ADMIN
Route::get('/nthadmins/index', function () {
    return view('nthAdmins.index');
});
Route::get('/nthadmins/nth-loai-san-pham',[NTH_LOAI_SAN_PHAMController::class,'nthList'])
        ->name('admins.nthloaisanpham');
        
//thêm
Route::get('/nthadmins/nth-loai-san-pham/nth-create',[NTH_LOAI_SAN_PHAMController::class,'nthCreate'])
        ->name('nthAdmins.nthLoaiSanPham.nthcreate');
Route::post('/nthadmins/nth-loai-san-pham/nth-create',[NTH_LOAI_SAN_PHAMController::class,'nthCreateSubmit'])
        ->name('nthAdmins.nthLoaiSanPham.nthcreatesubmit');

//Edit loại sản phẩm
Route::get('/nthadmins/nth-loai-san-pham/nth-edit/{id}',[NTH_LOAI_SAN_PHAMController::class,'nthEdit'])
        ->name('nthAdmins.nthLoaiSanPham.nthedit');
Route::post('/nthadmins/nth-loai-san-pham/nth-edit',[NTH_LOAI_SAN_PHAMController::class,'nthEditSubmit'])
        ->name('nthAdmins.nthLoaiSanPham.ntheditsubmit');
//xoá
Route::get('/nthadmins/nth-loai-san-pham/nth-delete/{id}',[NTH_LOAI_SAN_PHAMController::class,'nthDelete'])
        ->name('nthAdmins.nthLoaiSanPham.nthedit');

//Sản phẩm
Route::get('/nthadmins/nth-san-pham',[NTH_SAN_PHAMController::class,'nthList'])
        ->name('admins.nthsanpham');
//thêm
Route::get('/nthadmins/nth-loai-san-pham/nth-create',[NTH_SAN_PHAMController::class,'nthCreate'])
        ->name('nthAdmins.nthLoaiSanPham.nthcreate');
Route::post('/nthadmins/nth-loai-san-pham/nth-create',[NTH_SAN_PHAMController::class,'nthCreateSubmit'])
        ->name('nthAdmins.nthLoaiSanPham.nthcreatesubmit');