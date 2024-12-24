<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NTH_SAN_PHAM; 

class NTH_SAN_PHAMController extends Controller
{
    //List sản phẩm
    public function nthList()
    {
        $nthsanphams = NTH_SAN_PHAM::all();
        return view('nthAdmins.nthSanPham.nthlist',['nthsanphams'=>$nthsanphams]);
    }
    public function nthCreate()
    {
        return view('nthAdmins.nthSanPham.nthcreate');
    }
    public function nthCreateSubmit(Request $request)
    {
    // Validate input
        $validatedData = $request->validate
        ([
        'nthMaSanPham' => 'required|unique:nth_SAN_PHAM,nthMaSanPham',
        'nthTenSanPham' => 'required|string|max:255',
        'nthHinhAnh' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        'nthSoLuong' => 'required|numeric|min:1',
        'nthDonGia' => 'required|numeric',
        'nthMaLoai' => 'required|exists:nth_LOAI_SAN_PHAM,id',
        'nthTrangThai' => 'required|in:0,1',
        ]);
    }
}