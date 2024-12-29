<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NTH_SAN_PHAM;
use App\Models\NTH_HOA_DON;
use App\Models\NTH_CT_HOA_DON;
use App\Models\NTH_TIN_TUC; // Thêm model TinTuc nếu đã có

class NTH_TRANG_CHUController extends Controller
{
    // Hiển thị trang chủ
    public function index()
    {
        // Lấy tất cả sản phẩm
        $nthsanphams = NTH_SAN_PHAM::all();

        // Lấy một số tin tức mới nhất
        $nthtinTucs = NTH_TIN_TUC::latest()->take(5)->get(); // Lấy 5 tin tức mới nhất

        // Trả về view và truyền dữ liệu sản phẩm và tin tức vào
        return view('nthUser.Trangchu', compact('nthsanphams', 'nthtinTucs'));
    }

    // Hiển thị chi tiết sản phẩm
    public function show($id)
    {
        // Lấy sản phẩm theo id
        $nthsanphams = NTH_SAN_PHAM::findOrFail($id);

        // Trả về view chi tiết sản phẩm
        return view('nthuser.show', compact('sanPham'));
    }
}
