<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class nthKhoaController extends Controller
{
    //Đọc dữ liệu từ bảng khoa
    public function nthGetAllKhoa()
    {
        //truy vấn dữ liệu từ bảng khoa
        $nthkhoa = DB::select("Select * from nthkhoa");
        //chuyển dữ liệu lên view
        return view('nthKhoa.nthList',['nthkhoas' => $nthkhoa]);
    }
    //Chi tiết khoa
    public function nthGetKhoa($makhoa)
    {
        $khoa = DB::select("Select * from nthkhoa where nthmakh = ?",[$makhoa])[0];
        return view('nthKhoa.nthDetail',['khoa'=>$khoa]);
    }
    //Edit
    public function nthEdit($makh)
    {
        $khoa = DB::select("Select * from nthkhoa where nthmakh = ?",[$makh])[0];
        return view('nthKhoa.nthEdit',['khoa'=>$khoa]);
    }
    public function nthEditSubmit(Request $request)
    {
        $makh = $request->input('nthmakh');
        $tenkh = $request->input('nthmakh');
        DB::update("UPDATE nthkhoa SET nthtenkh = ? WHERE nthmakh = ?",[$tenkh,$makh]);
        return redirect('/khoas');
    }
    

}
