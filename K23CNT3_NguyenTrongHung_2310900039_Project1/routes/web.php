<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NTH_QUAN_TRIController;
use App\Http\Controllers\NTH_DS_QUAN_TRIController;
use App\Http\Controllers\NTH_LOAI_SAN_PHAMController;
use App\Http\Controllers\NTH_SAN_PHAMController;
use App\Http\Controllers\NTH_KHACH_HANG1Controller;
use App\Http\Controllers\NTH_HOA_DONController;
use App\Http\Controllers\NTH_CT_HOA_DONController;
use App\Http\Controllers\NTH_TIN_TUCController;


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
Route::get('/nthadmins/nthdsquantri/nthdanhmuc', [NTH_DS_QUAN_TRIController::class, 'danhmuc'])
        ->name('nthAdmins.nthdsquantri.danhmuc');
#admins - tin tức --------------------------------------------------------------------------------------------------------------------------------------
Route::get('/nthadmins/nthdsquantri/nthtintuc', [NTH_DS_QUAN_TRIController::class, 'tintuc'])
        ->name('nthAdmins.nthdsquantri.danhmuc.tintuc');
// Sản phẩm--------------------------------------------------------------------------------------------------------------------------------------
Route::get('/nthadmins/nthdsquantri/nthsanpham', [NTH_DS_QUAN_TRIController::class, 'sanpham'])
        ->name('nthAdmins.nthdsquantri.danhmuc.sanpham');
// Mô tả sản phẩm--------------------------------------------------------------------------------------------------------------------------------------
Route::get('/nthadmins/nthdsquantri/nthmota/{id}', [NTH_DS_QUAN_TRIController::class, 'mota'])
        ->name('nthAdmins.nthdsquantri.danhmuc.mota');
#admins - nguoidung--------------------------------------------------------------------------------------------------------------------------------------
Route::get('/nthadmins/nthdsquantri/nthnguoidung', [NTH_DS_QUAN_TRIController::class, 'nguoidung'])
        ->name('nthAdmins.nthdsquantri.nguoidung');

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

// Hóa Đơn***************************************
Route::get('/nthadmins/nth-hoa-don',[NTH_HOA_DONController::class,'nthList'])
        ->name('nthAdmins.nthhoadon');
//detail
Route::get('/nthadmins/nth-hoa-don/nth-detail/{id}', [NTH_HOA_DONController::class, 'nthDetail'])
        ->name('nthAdmins.nthhoadon.nthDetail');
//create
Route::get('/nthadmins/nth-hoa-don/nth-create',[NTH_HOA_DONController::class,'nthCreate'])
        ->name('nthAdmins.nthhoadon.nthCreate');
Route::post('/nthadmins/nth-hoa-don/nth-create',[NTH_HOA_DONController::class,'nthCreateSubmit'])
        ->name('nthAdmins.nthhoadon.nthCreateSubmit');
//edit
Route::get('/nthadmins/nth-hoa-don/nth-edit/{id}', [NTH_HOA_DONController::class, 'nthEdit'])
        ->name('nthAdmins.nthhoadon.nthedit');
Route::post('/nthadmins/nth-hoa-don/nth-edit/{id}', [NTH_HOA_DONController::class, 'nthEditSubmit'])
        ->name('nthAdmins.nthhoadon.nthEditSubmit');
//delete
Route::get('/nthadmins/nth-hoa-don/nth-delete/{id}', [NTH_HOA_DONController::class, 'nthDelete'])
        ->name('nthAdmins.nthhoadon.nthdelete');

//CT hoá đơn
// list
Route::get('/nthadmins/nth-ct-hoa-don',[NTH_CT_HOA_DONController::class,'nthList'])
        ->name('nthAdmins.nthcthoadon');
//detail
Route::get('/nthadmins/nth-ct-hoa-don/nth-detail/{id}', [NTH_CT_HOA_DONController::class, 'nthDetail'])
        ->name('nthAdmins.nthcthoadon.nthDetail');
//create
Route::get('/nthadmins/nth-ct-hoa-don/nth-create',[NTH_CT_HOA_DONController::class,'nthCreate'])
        ->name('nthAdmins.nthcthoadon.nthCreate');
Route::post('/nthadmins/nth-ct-hoa-don/nth-create',[NTH_CT_HOA_DONController::class,'nthCreateSubmit'])        
->name('nthAdmins.nthcthoadon.nthCreateSubmit');
//edit
Route::get('/nthadmins/nth-ct-hoa-don/nth-edit/{id}', [NTH_CT_HOA_DONController::class, 'nthEdit'])
        ->name('nthAdmins.nthcthoadon.nthEdit');
Route::post('/nthadmins/nth-ct-hoa-don/nth-edit/{id}', [NTH_CT_HOA_DONController::class, 'nthEditSubmit'])
        ->name('nthAdmins.nthcthoadon.nthEditSubmit');
//delete
Route::get('/nthadmins/nth-ct-hoa-don/nth-delete/{id}', [NTH_CT_HOA_DONController::class, 'nthDelete'])
        ->name('nthAdmins.nthcthoadon.nthdelete');


// Tin tức********************************************************************************************************
// list
Route::get('/nthadmins/nth-tin-tuc',[NTH_TIN_TUCController::class,'nthList'])
        ->name('nthAdmins.nthtintuc');
//detail
Route::get('/nthadmins/nth-tin-tuc/nth-detail/{id}', [NTH_TIN_TUCController::class, 'nthDetail'])
        ->name('nthAdmins.nthtintuc.nthDetail');
//create
Route::get('/nthadmins/nth-tin-tuc/nth-create',[NTH_TIN_TUCController::class,'nthCreate'])
        ->name('nthAdmins.nthtintuc.nthcreate');
Route::post('/nthadmins/nth-tin-tuc/nth-create',[NTH_TIN_TUCController::class,'nthCreateSubmit'])
        ->name('nthAdmins.nthtintuc.nthCreateSubmit');
//edit
Route::get('/nthadmins/nth-tin-tuc/nth-edit/{id}', [NTH_TIN_TUCController::class, 'nthEdit'])
        ->name('nthAdmins.nthtintuc.nthedit');
Route::post('/nthadmins/nth-tin-tuc/nth-edit/{id}', [NTH_TIN_TUCController::class, 'nthEditSubmit'])
        ->name('nthAdmins.nthtintuc.nthEditSubmit');
//delete
Route::get('/nthadmins/nth-tin-tuc/nth-delete/{id}', [NTH_TIN_TUCController::class, 'nthDelete'])
        ->name('nthAdmins.nthtintuc.nthdelete');









