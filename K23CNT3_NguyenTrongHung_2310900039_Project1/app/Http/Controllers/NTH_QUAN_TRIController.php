<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NTH_QUAN_TRI;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class NTH_QUAN_TRIController extends Controller
{
    //Login
    public function nthLogin()
    {
        return view('nthLogin.nthlogin');
    }

    public function nthLoginSubmit()
    {
        $nthquantri = NTH_QUAN_TRI::all();
        return view('nthAdmins.index', ['nthquantri'=>$nthquantri]);
    }
    public function nthLogout()
    {
        return view('nthLogin.nthlogin');
    }
    
    public function nthlist()
    {
        $nthquantris = NTH_QUAN_TRI::all(); 
        return view('nthAdmins.nthquantri.nthlist', ['nthquantris'=>$nthquantris]);
    }

    public function nthDetail($id)
    {
        $nthquantri = NTH_QUAN_TRI::where('id', $id)->first();
        return view('nthAdmins.nthquantri.nthdetail',['nthquantri'=>$nthquantri]);

    }

    //create
    public function nthCreate()
    {
        return view('nthAdmins.nthquantri.nthcreate');
    }

    public function nthCreateSubmit(Request $request)
    {
        $request->validate([
            'nthTaiKhoan' => 'required|string|unique:nth_quan_tri,nthTaiKhoan',
            'nthMatKhau' => 'required|string|min:6',
            'nthTrangThai' => 'required|in:0,1', 
        ]);
        $nthquantri = new NTH_QUAN_TRI();
        $nthquantri->nthTaiKhoan = $request->nthTaiKhoan;
        $nthquantri->nthMatKhau = Hash::make($request->nthMatKhau);
        $nthquantri->nthTrangThai = $request->nthTrangThai;
        $nthquantri->save();

        return redirect()->route('nthAdmins.nthquantri')->with('success', 'Thêm quản trị viên thành công');
    }

    // edit
    public function nthEdit($id)
    {
        $nthquantri = NTH_QUAN_TRI::find($id);
        if (!$nthquantri) {
            return redirect()->route('nthAdmins.nthquantri')->with('error', 'Không tìm thấy quản trị viên!');
        }
        return view('nthAdmins.nthquantri.nthedit', ['nthquantri'=>$nthquantri]);
    }

    public function nthEditSubmit(Request $request, $id)
    {
        $request->validate([
            'nthTaiKhoan' => 'required|string|unique:nth_quan_tri,nthTaiKhoan,' . $id,
            'nthMatKhau' => 'nullable|string|min:6', // Cho phép mật khẩu trống
            'nthTrangThai' => 'required|in:0,1',
        ]);

        $nthquantri = nth_QUAN_TRI::find($id);
        if (!$nthquantri) {
            return redirect()->route('nthAdmins.nthquantri')->with('error', 'Không tìm thấy quản trị viên!');
        }

        $nthquantri->nthTaiKhoan = $request->nthTaiKhoan;
        if ($request->nthMatKhau) {
            $nthquantri->nthMatKhau = Hash::make($request->nthMatKhau); // Cập nhật mật khẩu nếu có
        }
        $nthquantri->nthTrangThai = $request->nthTrangThai;
        $nthquantri->save();

        return redirect()->route('nthAdmins.nthquantri')->with('success', 'Cập nhật quản trị viên thành công');
    }

    // delete
    public function nthDelete($id)
    {
        $nthquantri = nth_QUAN_TRI::find($id); 
        if (!$nthquantri) {
            return redirect()->route('nthAdmins.nthquantri')->with('error', 'Không tìm thấy quản trị viên!');
        }
        $nthquantri->delete(); 

        return redirect()->route('nthAdmins.nthquantri')->with('success', 'Xóa quản trị viên thành công');
    }
}
