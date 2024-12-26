<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NTH_KHACH_HANG1;//model
class NTH_KHACH_HANG1Controller extends Controller
{
    public function nthList()
    {
        $khachhangs = NTH_KHACH_HANG1::all();
        return view('nthAdmins.nthkhachhang.nthList',['khachhangs'=>$khachhangs]);
    }
    // detail 
    public function nthDetail($id)
    {
        $nthkhachhang = NTH_KHACH_HANG1::where('id',$id)->first();
        return view('nthAdmins.nthkhachhang.nthDetail',['nthkhachhang'=>$nthkhachhang]);
    }
    // create
    public function nthCreate()
    {
        return view('nthAdmins.nthkhachhang.nthCreate');
    }
    //post
    public function nthCreateSubmit(Request $request)
    {
        $validate = $request->validate([
            'nthMaKhachHang' => 'required|unique:nth_khach_hang1,nthMaKhachHang',
            'nthHoTenKhachHang' => 'required|string',
            'nthEmail' => 'required|email|unique:nth_khach_hang1,nthEmail',  
            'nthMatKhau' => 'required|min:6',
            'nthDienThoai' => 'required|numeric|unique:nth_khach_hang1,nthDienThoai',  
            'nthDiaChi' => 'required|string',
            'nthNgayDangKy' => 'required|date',  
            'nthTrangThai' => 'required|in:0,1,2',
        ]);

        $nthkhachhang = new NTH_KHACH_HANG1;
        $nthkhachhang->nthMaKhachHang = $request->nthMaKhachHang;
        $nthkhachhang->nthHoTenKhachHang = $request->nthHoTenKhachHang;
        $nthkhachhang->nthEmail = $request->nthEmail;
        $nthkhachhang->nthMatKhau = $request->nthMatKhau;
        $nthkhachhang->nthDienThoai = $request->nthDienThoai;
        $nthkhachhang->nthDiaChi = $request->nthDiaChi;
        $nthkhachhang->nthNgayDangKy = $request->nthNgayDangKy;
        $nthkhachhang->nthTrangThai = $request->nthTrangThai;

        $nthkhachhang->save();

        return redirect()->route('nthAdmins.nthkhachhang');


    }

    // edit
    public function nthEdit($id)
    {
        // Lấy khách hàng theo id
        $nthkhachhang = NTH_KHACH_HANG1::where('id', $id)->first();
    
        // Kiểm tra nếu khách hàng không tồn tại
        if (!$nthkhachhang) {
            return redirect()->route('nthadmins.nthkhachhang')->with('error', 'Khách hàng không tồn tại!');
        }
    
        // Trả về view để chỉnh sửa khách hàng
        return view('nthAdmins.nthkhachhang.nthEdit', ['nthkhachhang' => $nthkhachhang]);
    }
    
    public function nthEditSubmit(Request $request, $id)
    {
        // Xác thực dữ liệu
        $validate = $request->validate([
            'nthMaKhachHang' => 'required|unique:nth_khach_hang1,nthMaKhachHang,' . $id,
            'nthHoTenKhachHang' => 'required|string',
            'nthEmail' => 'required|email|unique:nth_khach_hang1,nthEmail,' . $id,
            'nthMatKhau' => 'nullable|min:6',
            'nthDienThoai' => 'required|numeric|unique:nth_khach_hang1,nthDienThoai,' . $id,
            'nthDiaChi' => 'required|string',
            'nthNgayDangKy' => 'required|date',
            'nthTrangThai' => 'required|in:0,1,2',
        ]);
    
        // Lấy khách hàng theo id
        $nthkhachhang = NTH_KHACH_HANG1::where('id', $id)->first();
    
        // Kiểm tra nếu khách hàng không tồn tại
        if (!$nthkhachhang) {
            return redirect()->route('nthAdmins.nthkhachhang')->with('error', 'Khách hàng không tồn tại!');
        }
    
        // Cập nhật các giá trị từ request
        $nthkhachhang->nthMaKhachHang = $request->nthMaKhachHang;
        $nthkhachhang->nthHoTenKhachHang = $request->nthHoTenKhachHang;
        $nthkhachhang->nthEmail = $request->nthEmail;
        $nthkhachhang->nthMatKhau = $request->nthMatKhau;
        $nthkhachhang->nthDienThoai = $request->nthDienThoai;
        $nthkhachhang->nthDiaChi = $request->nthDiaChi;
        $nthkhachhang->nthNgayDangKy = $request->nthNgayDangKy;
        $nthkhachhang->nthTrangThai = $request->nthTrangThai;
    
        // Lưu khách hàng đã cập nhật
        $nthkhachhang->save();
    
        // Chuyển hướng đến danh sách khách hàng
        return redirect()->route('nthAdmins.nthkhachhang')->with('success', 'Cập nhật khách hàng thành công!');
    }
    
    //delete
    public function nthDelete($id)
    {
        NTH_KHACH_HANG1::where('id',$id)->delete();
        return back()->with('khachhang_deleted','Đã xóa Khách hàng thành công!');
    }
}
