<?php

namespace App\Http\Controllers;

use App\Models\NTH_SAN_PHAM; 
use App\Models\NTH_KHACH_HANG1; 
use App\Models\NTH_TIN_TUC; 
use Illuminate\Http\Request;

class NTH_DS_QUAN_TRIController extends Controller
{
    public function danhmuc()
        {
            // Truy vấn số lượng sản phẩm
            $productCount = NTH_SAN_PHAM::count();
        
            // Truy vấn số lượng người dùng
            $userCount = NTH_KHACH_HANG1::count();
            $ttCount = NTH_TIN_TUC::count();

        
            // Trả về view và truyền cả productCount và userCount
            return view('nthAdmins.nthdsquantri.nthdanhmuc', compact('productCount', 'userCount','ttCount'));
        }

        public function nguoidung()
        {
            $nthnguoidung = NTH_KHACH_HANG1::all();
        
            // Chuyển đổi nthNgayDangKy thành đối tượng Carbon thủ công
            foreach ($nthnguoidung as $user) {
                // Chuyển đổi ngày tháng thành đối tượng Carbon nếu chưa phải là Carbon
                $user->nthNgayDangKy = Carbon::parse($user->nthNgayDangKy);
            }
        
            return view('nthAdmins.nthdsquantri.nthdanhmuc.nthnguoidung', ['nthnguoidung' => $nthnguoidung]);
        }
        

        public function tintuc()
        {
            // Retrieve all news articles from the database (assuming you have a model named nth_TIN_TUC)
            $nthtintucs = NTH_TIN_TUC::all();  // Fetching all articles
        
            // Loop through articles and add the full URL to the image
            foreach ($nthtintucs as $article) {
                // Assuming nthHinhAnh stores the image name, we'll prepend the 'public/storage' path
                $article->image_url = asset('storage/' . $article->nthHinhAnh);
            }
        
            // Return the view and pass the articles to it
            return view('nthAdmins.nthdsquantri.nthdanhmuc.nthtintuc', [
                'nthtintucs' => $nthtintucs, // Passing the news articles to the view
            ]);
        }
        
    

    // Hiển thị danh sách sản phẩm
    public function sanpham()
    {
        $nthsanphams = NTH_SAN_PHAM::all(); // Lấy tất cả sản phẩm
        return view('nthAdmins.nthdsquantri.nthdanhmuc.nthsanpham', ['nthsanphams' => $nthsanphams]);
    }

    // Hiển thị mô tả chi tiết sản phẩm
    public function mota($id)
    {
        // Lấy sản phẩm theo id
        $product = NTH_SAN_PHAM::find($id);
        
        // Kiểm tra nếu sản phẩm không tồn tại
        if (!$product) {
            return redirect()->route('nthAdmins.nthdsquantri.danhmuc.sanpham')
                             ->with('error', 'Sản phẩm không tồn tại.');
        }

        // Trả về view với thông tin sản phẩm
        return view('nthAdmins.nthdsquantri.nthdanhmuc.nthmota', ['product' => $product]);
    }

}
