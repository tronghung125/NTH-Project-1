<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NTH_HOA_DON;
use App\Models\NTH_KHACH_HANG1;


class NTH_HOA_DONController extends Controller
{
    //
    public function nthList()
    {
        $nthhoadons = NTH_HOA_DON::all();
        return view('nthAdmins.nthhoadon.nthlist',['nthhoadons'=>$nthhoadons]);
    }
    
    public function nthDetail($id)
    {
        $nthhoadon = NTH_HOA_DON::where('id', $id)->first();
        return view('nthAdmins.nthhoadon.nthDetail', ['nthhoadon' => $nthhoadon]);
    }
    
    public function nthCreate()
    {
        $nthkhachhang = NTH_KHACH_HANG1::all();
        return view('nthAdmins.nthhoadon.nthCreate',['nthkhachhang'=>$nthkhachhang]);
    }
    
    public function nthCreateSubmit(Request $request)
    {

        $validate = $request->validate([
            'nthMaHoaDon' => 'required|unique:nth_hoa_don,nthMaHoaDon',
            'nthMaKhachHang' => 'required|exists:nth_khach_hang1,id',
            'nthNgayHoaDon' => 'required|date',  
            'nthNgayNhan' => 'required|date',
            'nthHoTenKhachHang' => 'required|string',  
            'nthEmail' => 'required|email',
            'nthDienThoai' => 'required|numeric',  
            'nthDiaChi' => 'required|string',  
            'nthTongTriGia' => 'required|numeric',
            'nthTrangThai' => 'required|in:0,1,2',
        ]);
    
        $nthhoadon = new NTH_HOA_DON;
    
        $nthhoadon->nthMaHoaDon = $request->nthMaHoaDon;
        $nthhoadon->nthMaKhachHang = $request->nthMaKhachHang; 
        $nthhoadon->nthHoTenKhachHang = $request->nthHoTenKhachHang;
        $nthhoadon->nthEmail = $request->nthEmail;
        $nthhoadon->nthDienThoai = $request->nthDienThoai;
        $nthhoadon->nthDiaChi = $request->nthDiaChi;
        
        $nthhoadon->nthTongTriGia = (double) $request->nthTongTriGia; 
        
        $nthhoadon->nthTrangThai = $request->nthTrangThai;
    
        $nthhoadon->nthNgayHoaDon = $request->nthNgayHoaDon;
        $nthhoadon->nthNgayNhan = $request->nthNgayNhan;
    
        $nthhoadon->save();
    
        return redirect()->route('nthAdmins.nthhoadon');
    }
    


    public function nthEdit($id)
    {
        $nthhoadon = NTH_HOA_DON::where('id', $id)->first();
        $nthkhachhang = NTH_KHACH_HANG1::all();
        return view('nthAdmins.nthhoadon.nthedit',['nthkhachhang'=>$nthkhachhang,'nthhoadon'=>$nthhoadon]);
    }
    //post
    public function nthEditSubmit(Request $request,$id)
    {
        $validate = $request->validate([
            'nthMaHoaDon' => 'required|unique:nth_hoa_don,nthMaHoaDon,'. $id,
            'nthMaKhachHang' => 'required|exists:nth_khach_hang1,id',
            'nthNgayHoaDon' => 'required|date',  
            'nthNgayNhan' => 'required|date',
            'nthHoTenKhachHang' => 'required|string',  
            'nthEmail' => 'required|email',
            'nthDienThoai' => 'required|numeric',  
            'nthDiaChi' => 'required|string',  
            'nthTongTriGia' => 'required|numeric', 
            'nthTrangThai' => 'required|in:0,1,2',
        ]);
    
        $nthhoadon = NTH_HOA_DON::where('id', $id)->first();
        $nthhoadon->nthMaHoaDon = $request->nthMaHoaDon;
        $nthhoadon->nthMaKhachHang = $request->nthMaKhachHang;  
        $nthhoadon->nthHoTenKhachHang = $request->nthHoTenKhachHang;
        $nthhoadon->nthEmail = $request->nthEmail;
        $nthhoadon->nthDienThoai = $request->nthDienThoai;
        $nthhoadon->nthDiaChi = $request->nthDiaChi;
        
        $nthhoadon->nthTongTriGia = (double) $request->nthTongTriGia;
        
        $nthhoadon->nthTrangThai = $request->nthTrangThai;
    
        $nthhoadon->nthNgayHoaDon = $request->nthNgayHoaDon;
        $nthhoadon->nthNgayNhan = $request->nthNgayNhan;
    
        $nthhoadon->save();
    
        return redirect()->route('nthAdmins.nthhoadon');
    }
    
        //delete
    public function nthDelete($id)
        {
            NTH_HOA_DON::where('id',$id)->delete();
            return back()->with('hoadon_deleted','Đã xóa Khách hàng thành công!');
        }
}
