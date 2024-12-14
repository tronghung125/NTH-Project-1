<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nthSinhVien;

class nthSinhVienController extends Controller
{
    public function nthList()
    {
        //Lấy dữ liệu trong bảng sinh viên
        $nthsinhvien = nthsinhvien::all();
        return view('nthsinhvien.nthList', ['nthsinhvien'=>$nthsinhvien]);
    }

    public function nthCreate()
    {
        return view('nthsinhvien.nthCreate');
    }
    public function nthCreateSubmit(Request $request)
        {//lấy dữ liệu
        $nthsinhvien = new nthSinhVien;
        $nthsinhvien->nthmasv=$request->nthmasv;
        $nthsinhvien->nthhosv=$request->nthhosv;
        $nthsinhvien->nthtensv=$request->nthtensv;
        $nthsinhvien->nthphai=$request->nthphai;
        $nthsinhvien->nthngaysinh=$request->nthngaysinh;
        $nthsinhvien->nthnoisinh=$request->nthnoisinh;
        $nthsinhvien->nthmakh=$request->nthmakh;
        $nthsinhvien->nthhocbong=$request->nthhocbong;
            //ghi lại
        $nthsinhvien->save();
        return back()->with('nthsinhvien_nthCreate','Đã thêm mới thành công');
        /*$validated = $request->validate([
            'nthmasv' => 'required|max:10',
            'nthhosv' => 'required|max:50',
            'nthtensv' => 'required|max:50',
            'nthphai' => 'required|in:Nam,Nữ',
            'nthngaysinh' => 'required|date',
            'nthnoisinh' => 'required|max:100',
            'nthmakh' => 'required|max:10',
            'nthhocbong' => 'nullable|numeric|min:0',
        ], 
        [
            'nthmasv.required' => 'Mã sinh viên là bắt buộc.',
            'nthhosv.required' => 'Họ sinh viên là bắt buộc.',
            'nthtensv.required' => 'Tên sinh viên là bắt buộc.',
            'nthphai.in' => 'Giới tính chỉ có thể là Nam hoặc Nữ.',
            'nthngaysinh.date' => 'Ngày sinh phải là định dạng ngày hợp lệ.',
        ]
        );*/
    }
}
