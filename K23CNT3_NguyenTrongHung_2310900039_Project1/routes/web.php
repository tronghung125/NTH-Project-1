<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NTH_QUAN_TRIController;
use App\Http\Controllers\NTH_LOAI_SAN_PHAMController;
use App\Http\Controllers\NTH_SAN_PHAMController;
use App\Http\Controllers\NTH_KHACH_HANG1controller;
;
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
//đăng nhập
Route::get('/admins/nthlogin',[NTH_QUAN_TRIController::class,'nthLogin'])->name('admins.nthLogin');
Route::post('/admins/nthlogin',[NTH_QUAN_TRIController::class,'nthLoginSubmit'])->name('admins.nthLoginSubmit');
//Đăng xuất
Route::get('/admins/nthlogin',[NTH_QUAN_TRIController::class,'nthLogout'])->name('admins.nthLogout');

//ADMIN
Route::get('/nthadmins/index', function () {
    return view('nthAdmins.index');
});
//Quản trị *******************************************************
// list
Route::get('/nthadmins/nth-quan-tri',[NTH_QUAN_TRIController::class,'nthList'])
        ->name('nthAdmins.nthquantri');

//detail
Route::get('/nthadmins/nth-quan-tri/nth-detail/{id}', [NTH_QUAN_TRIController::class, 'nthDetail'])
        ->name('nthAdmins.nthquantri.nthDetail');
//create
Route::get('/nthadmins/nth-quan-tri/nth-create',[NTH_QUAN_TRIController::class,'nthCreate'])
        ->name('nthAdmins.nthquantri.nthCreate');
Route::post('/nthadmins/nth-quan-tri/nth-create',[NTH_QUAN_TRIController::class,'nthCreateSubmit'])
        ->name('nthAdmins.nthquantri.nthCreateSubmit');
//edit
Route::get('/nthadmins/nth-quan-tri/nth-edit/{id}', [NTH_QUAN_TRIController::class, 'nthEdit'])
        ->name('nthAdmins.nthquantri.nthedit');
Route::post('/nth-admins/nth-quan-tri/nth-edit/{id}', [NTH_QUAN_TRIController::class, 'nthEditSubmit'])
        ->name('nthAdmins.nthquantri.nthEditSubmit');
//delete
Route::get('/nthadmins/nth-quan-tri/nth-delete/{id}', [NTH_QUAN_TRIController::class, 'nthDelete'])
        ->name('nthAdmins.nthquantri.nthdelete');

//Loại sản phẩm*******************************************************
Route::get('/nthadmins/nth-loai-san-pham',[NTH_LOAI_SAN_PHAMController::class,'nthList'])
        ->name('admins.nthloaisanpham');
        
//thêm
Route::get('/nthadmins/nth-loai-san-pham/nth-create',[NTH_LOAI_SAN_PHAMController::class,'nthCreate'])
        ->name('nthAdmins.nthLoaiSanPham.nthcreate');
Route::post('/nthadmins/nth-loai-san-pham/nth-create',[NTH_LOAI_SAN_PHAMController::class,'nthCreateSubmit'])
        ->name('nthAdmins.nthLoaiSanPham.nthcreatesubmit');

//Xem chi tiết loại sản phẩm
Route::get('/nthadmins/nth-loai-san-pham/nth-detail/{id}',[NTH_LOAI_SAN_PHAMController::class,'nthDetail'])
        ->name('nthAdmins.nthLoaiSanPham.nthdetail');

//Edit loại sản phẩm
Route::get('/nthadmins/nth-loai-san-pham/nth-edit/{id}',[NTH_LOAI_SAN_PHAMController::class,'nthEdit'])
        ->name('nthAdmins.nthLoaiSanPham.nthedit');
Route::post('/nthadmins/nth-loai-san-pham/nth-edit',[NTH_LOAI_SAN_PHAMController::class,'nthEditSubmit'])
        ->name('nthAdmins.nthLoaiSanPham.ntheditsubmit');

// Xoá loại sản phẩm
Route::get('/nthadmins/nth-loai-san-pham/nth-delete/{id}', [NTH_LOAI_SAN_PHAMController::class, 'nthDelete'])
    ->name('nthAdmins.nthLoaiSanPham.nthdelete');


//Sản phẩm*******************************************************
Route::get('/nthadmins/nth-san-pham',[NTH_SAN_PHAMController::class,'nthList'])
        ->name('nthAdmins.nthSanPham');

//thêm
Route::get('/nthadmins/nth-san-pham/nth-create',[NTH_SAN_PHAMController::class,'nthCreate'])
        ->name('nthAdmins.nthSanPham.nthcreate');
Route::post('/nthadmins/nth-san-pham/nth-create',[NTH_SAN_PHAMController::class,'nthCreateSubmit'])
        ->name('nthAdmins.nthSanPham.nthcreatesubmit');

//detail
Route::get('/nthadmins/nth-san-pham/nth-detail/{id}',[NTH_SAN_PHAMController::class,'nthDetail'])
        ->name('nthAdmins.nthSanPham.nthdetail');

//Sửa
Route::get('/nthadmins/nth-san-pham/nth-edit/{id}',[NTH_SAN_PHAMController::class,'nthEdit'])
        ->name('nthAdmins.nthSanPham.nthedit');
Route::post('/nthadmins/nth-san-pham/nth-edit/{id}', [NTH_SAN_PHAMController::class, 'nthEditSubmit'])
        ->name('nthAdmins.nthSanPham.ntheditsubmit');

//delete
Route::get('/nthadmins/nth-san-pham/nth-delete/{id}', [NTH_SAN_PHAMController::class, 'nthDelete'])
        ->name('nthAdmins.nthSanPham.nthdelete');


//Khách hàng**************************************************************
// list
Route::get('/nthadmins/nth-khach-hang',[NTH_KHACH_HANG1controller::class,'nthList'])
        ->name('nthAdmins.nthkhachhang');
//detail
Route::get('/nthadmins/nth-khach-hang/nth-detail/{id}', [NTH_KHACH_HANG1controller::class, 'nthDetail'])
        ->name('nthAdmins.nthkhachhang.nthDetail');
//create
Route::get('/nthadmins/nth-khach-hang/nth-create',[NTH_KHACH_HANG1controller::class,'nthCreate'])
        ->name('nthAdmins.nthkhachhang.nthcreate');
Route::post('/nthadmins/nth-khach-hang/nth-create',[NTH_KHACH_HANG1controller::class,'nthCreateSubmit'])
        ->name('nthAdmins.nthkhachhang.nthCreateSubmit');
//edit
Route::get('/nthadmins/nth-khach-hang/nth-edit/{id}', [NTH_KHACH_HANG1controller::class, 'nthEdit'])
        ->name('nthAdmins.nthkhachhang.nthedit');
Route::post('/nthadmins/nth-khach-hang/nth-edit/{id}', [NTH_KHACH_HANG1controller::class, 'nthEditSubmit'])
        ->name('nthAdmins.nthkhachhang.nthEditSubmit');
//delete
Route::get('/nthadmins/nth-khach-hang/nth-delete/{id}', [NTH_KHACH_HANG1controller::class, 'nthDelete'])
        ->name('nthAdmins.nthkhachhang.nthdelete');
