<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NTH_LOAI_SAN_PHAM;//model

class NTH_LOAI_SAN_PHAMController extends Controller
{
    //List danh sách
    public function nthList()
    {
        $nthLoaiSanPhams = NTH_LOAI_SAN_PHAM::all();
        return view('nthAdmins.nthLoaiSanPham.nthlist',['nthLoaiSanPhams'=>$nthLoaiSanPhams]);
    }
    //Create
    public function nthCreate()
    {
        return view('nthAdmins.nthLoaiSanPham.nthcreate');
    }
    public function nthCreateSubmit(Request $request)
    {   
        //validation data
        $validatedData = $request->validate
        ([
            'nthMaLoai' => 'required|unique:NTH_LOAI_SAN_PHAM,nthMaLoai', 
            'nthTenLoai' => 'required|string|max:255',
            'nthTrangThai' => 'required|in:0,1',
        ]);

        //Ghi dữ liệu xuống DB
        $nthLoaiSanPham = new NTH_LOAI_SAN_PHAM;
        $nthLoaiSanPham->nthMaLoai = $request->nthMaLoai;
        $nthLoaiSanPham->nthTenLoai = $request->nthTenLoai;
        $nthLoaiSanPham->nthTrangThai = $request->nthTrangThai;

        $nthLoaiSanPham->save();

        return redirect()->route('admins.nthloaisanpham');
    }
    //Edit Get
    public function nthEdit($id)
    {
        $nthLoaiSanPham = NTH_LOAI_SAN_PHAM::find($id);
        return view('nthAdmins.nthLoaiSanPham.nthedit',['nthLoaiSanPham'=> $nthLoaiSanPham]);
    }
    //post
    public function nthEditSubmit(Request $request)
    {
        $validatedData = $request->validate
        ([
            'nthMaLoai' => 'required', 
            'nthTenLoai' => 'required',
        ]);

        $nthLoaiSanPham = NTH_LOAI_SAN_PHAM::find($request->id);
        $nthLoaiSanPham->nthMaLoai = $request->nthMaLoai;
        $nthLoaiSanPham->nthTenLoai = $request->nthTenLoai;
        $nthLoaiSanPham->nthTrangThai = $request->nthTrangThai;

        $nthLoaiSanPham->save();

        return redirect()->route('admins.nthloaisanpham');
    }
    //xoá
    public function nthDelete($id)
    {
        $nthLoaiSanPham = NTH_LOAI_SAN_PHAM::find($id);
        $nthLoaiSanPham->delete();
        return redirect()->route('admins.nthloaisanpham');
    }
    //Xem chi tiết
    public function nthDetail($id)
    {
        $nthLoaiSanPham = NTH_LOAI_SAN_PHAM::where('id', $id)->first();
        return view('nthAdmins.nthLoaiSanPham.nthdetail',['nthLoaiSanPham'=> $nthLoaiSanPham]);
    }
}
