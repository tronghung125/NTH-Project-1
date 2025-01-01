<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NTH_SAN_PHAM;
use App\Models\NTH_LOAI_SAN_PHAM;
use Illuminate\Support\Facades\Storage;

class NTH_SAN_PHAMController extends Controller
{
    // Danh sách sản phẩm
    public function nthList()
    {
        $nthsanphams = NTH_SAN_PHAM::where('nthTrangThai', 0)->get();
        return view('nthAdmins.nthSanPham.nthlist', ['nthsanphams' => $nthsanphams]);
    }

    // Thêm mới
    public function nthCreate()
    {
        return view('nthAdmins.nthSanPham.nthcreate');
    }

    public function nthCreateSubmit(Request $request)
    {
        // Validate input
        $validatedData = $request->validate([
            'nthMaSanPham' => 'required|unique:NTH_SAN_PHAM,nthMaSanPham',
            'nthTenSanPham' => 'required|string|max:255',
            'nthHinhAnh' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'nthSoLuong' => 'required|numeric|min:1',
            'nthDonGia' => 'required|numeric',
            'nthMaLoai' => 'required|exists:NTH_LOAI_SAN_PHAM,id',
            'nthTrangThai' => 'required|in:0,1',
        ]);

        // Xử lý upload hình ảnh
        $imagePath = $request->file('nthHinhAnh')->store('products', 'public');

        // Tạo mới sản phẩm
        NTH_SAN_PHAM::create([
            'nthMaSanPham' => $validatedData['nthMaSanPham'],
            'nthTenSanPham' => $validatedData['nthTenSanPham'],
            'nthHinhAnh' => $imagePath,
            'nthSoLuong' => $validatedData['nthSoLuong'],
            'nthDonGia' => $validatedData['nthDonGia'],
            'nthMaLoai' => $validatedData['nthMaLoai'],
            'nthTrangThai' => $validatedData['nthTrangThai'],
        ]);

        return redirect()->route('nthAdmins.nthSanPham')->with('success', 'Thêm sản phẩm thành công!');
    }

    // Xem chi tiết
    public function nthDetail($id)
    {
        $nthsanpham = NTH_SAN_PHAM::findOrFail($id);
        return view('nthAdmins.nthSanPham.nthDetail', ['nthsanpham' => $nthsanpham]);
    }

    // Xóa
    public function nthDelete($id)
    {
        NTH_SAN_PHAM::findOrFail($id)->delete();
        return redirect()->route('nthAdmins.nthSanPham')->with('success', 'Xóa sản phẩm thành công!');
    }

    // Sửa
    public function nthEdit($id)
    {
    $nthsanpham = NTH_SAN_PHAM::findOrFail($id);
    $nthloaisanpham = NTH_LOAI_SAN_PHAM::all(); 

    return view('nthAdmins.nthSanPham.nthedit', [
        'nthsanpham' => $nthsanpham,
        'nthloaisanpham' => $nthloaisanpham, 
    ]);
    }

    public function nthEditSubmit(Request $request, $id)
    {   
    $request->validate([
        'nthMaSanPham' => 'required|max:20',
        'nthTenSanPham' => 'required|max:255',
        'nthHinhAnh' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'nthSoLuong' => 'required|integer',
        'nthDonGia' => 'required|numeric',
        'nthMaLoai' => 'required|max:10',
        'nthTrangThai' => 'required|in:0,1',
    ]);

    $nthsanpham = NTH_SAN_PHAM::findOrFail($id);

    $nthsanpham->nthMaSanPham = $request->nthMaSanPham;
    $nthsanpham->nthTenSanPham = $request->nthTenSanPham;
    $nthsanpham->nthSoLuong = $request->nthSoLuong;
    $nthsanpham->nthDonGia = $request->nthDonGia;
    $nthsanpham->nthMaLoai = $request->nthMaLoai;
    $nthsanpham->nthTrangThai = $request->nthTrangThai;

    if ($request->hasFile('nthHinhAnh')) {
        if ($nthsanpham->nthHinhAnh && Storage::disk('public')->exists('img' . $nthsanpham->nthHinhAnh)) {
            Storage::disk('public')->delete('img/san_pham/' . $nthsanpham->nthHinhAnh);
        }
        $imagePath = $request->file('nthHinhAnh')->store('img/san_pham', 'public');
        $nthsanpham->nthHinhAnh = $imagePath;
    }

    $nthsanpham->save();

    return redirect()->route('nthAdmins.nthSanPham')->with('success', 'Sản phẩm đã được cập nhật thành công.');

    }
}