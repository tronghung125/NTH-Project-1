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
        $tenkh = $request->input('nthtenkh');
        DB::update("UPDATE nthkhoa SET nthtenkh = ? WHERE nthmakh = ?",[$tenkh,$makh]);
        return redirect('/khoas');
    }
    //insert
    public function nthInsert()
    {
        return view('nthKhoa.nthInsert');
    }
    //insert post
    public function nthInsertSubmit(Request $request)
    {//Kiểm tra dữ liệu
        $validate = $request->validate([
            'nthmakh' => 'required|max:2',
            'nthtenkh' => 'required|max:50'
            ],
            [
            'nthmakh.required'=>'Vui lòng nhập mã khoa.',
            'nthmakh.max'=>'Mã khoa tối đa 2 ký tự.',
            'nthtenkh.required'=>'Vui lòng nhập tên khoa.',
            'nthtenkh.min'=>'Tên khoa phải có ít nhất 50 ký tự.',
            ]
        );
        //lấy dữ liệu trên form
        $makh = $request->input('nthmakh');
        $tenkh = $request->input('nthtenkh');
        //ghi dữ liệu xuống DB
        DB::insert("INSERT INTO nthkhoa(nthmakh, nthtenkh) VALUES(?, ?)", [$makh, $tenkh]);        
        //Chuyển sang trang danh sách
        return redirect('/khoas');
    }
    //delete
    public function nthDelete($makh)
    {
        DB::delete("DELETE FROM nthkhoa WHERE nthmakh=?",[$makh]);
        return redirect('/khoas');
    }
}
