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
//đăng nhập
Route::get('/admins/nthlogin',[NTH_QUAN_TRIController::class,'nthLogin'])->name('admins.nthLogin');
Route::post('/admins/nthlogin',[NTH_QUAN_TRIController::class,'nthLoginSubmit'])->name('admins.nthLoginSubmit');
//Đăng xuất
Route::get('/admins/nthlogin',[NTH_QUAN_TRIController::class,'nthLogout'])->name('admins.nthLogout');

//ADMIN
Route::get('/nthadmins/index', function () {
    return view('nthAdmins.index');
});

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

