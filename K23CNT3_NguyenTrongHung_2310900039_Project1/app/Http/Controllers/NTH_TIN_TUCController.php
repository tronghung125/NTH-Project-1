<?php

namespace App\Http\Controllers;
use App\Models\NTH_TIN_TUC;  
use Illuminate\Http\Request;

class NTH_TIN_TUCController extends Controller
{
    //
        public function nthList()
    {
        $nthtinTucs = NTH_TIN_TUC::all();
            
        // Phân trang kết quả, thay 10 bằng số lượng bạn muốn mỗi trang
        $nthtinTucs = NTH_TIN_TUC::paginate(10);
        
        
        // Return the view with the paginated data
        return view('nthAdmins.nthtintuc.nthlist', ['nthtinTucs' => $nthtinTucs]);
    }

        

        // Show the detail of a specific news item -------------------------------------------
        public function nthDetail($id)
        {
            $nthtinTuc = NTH_TIN_TUC::findOrFail($id);
            return view('nthAdmins.nthtintuc.nthdetail', ['nthtinTuc' => $nthtinTuc]);
        }

        // Show the create form for a new news item ----------------------------------------
        public function nthCreate()
        {
            return view('nthAdmins.nthtintuc.nthcreate');
        }

        // Handle the form submission for creating a new news item ---------------------------
        public function nthCreateSubmit(Request $request)
        {
            // Validate the input data
            $validatedData = $request->validate([
                'nthMaTT' => 'required|unique:nth_TIN_TUC,nthMaTT',
                'nthTieuDe' => 'required|string|max:255',
                'nthMoTa' => 'required|string',
                'nthNoiDung' => 'required|string',
                'nthNgayDangTin' => 'required|date',
                'nthNgayCapNhap' => 'required|date',
                'nthHinhAnh' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240', // Optional image
                'nthTrangThai' => 'required|in:0,1',  // 0 - inactive, 1 - active
            ]);

            // Create the new news item
            $nthtinTuc = new NTH_TIN_TUC();
            $nthtinTuc->nthMaTT = $request->nthMaTT;
            $nthtinTuc->nthTieuDe = $request->nthTieuDe;
            $nthtinTuc->nthMoTa = $request->nthMoTa;
            $nthtinTuc->nthNoiDung = $request->nthNoiDung;
            $nthtinTuc->nthNgayDangTin = $request->nthNgayDangTin;
            $nthtinTuc->nthNgayCapNhap = $request->nthNgayCapNhap;

            // Check if there's an image and save it
            if ($request->hasFile('nthHinhAnh')) {
                $imagePath = $request->file('nthHinhAnh')->store('public/img/tin_tuc');
                $nthtinTuc->nthHinhAnh = 'img/tin_tuc/' . basename($imagePath);
            }

            $nthtinTuc->nthTrangThai = $request->nthTrangThai;
            $nthtinTuc->save();

            return redirect()->route('nthAdmins.nthtintuc')->with('success', 'Tin tức đã được tạo thành công.');
        }

        // Delete a news item ----------------------------------------------------------------
        public function nthDelete($id)
        {
            $nthtinTuc = NTH_TIN_TUC::findOrFail($id);
            $nthtinTuc->delete();

            return back()->with('success', 'Tin tức đã được xóa thành công.');
        }

        // Show the edit form for a specific news item --------------------------------------
        public function nthEdit($id)
        {
            $nthtinTuc = NTH_TIN_TUC::findOrFail($id);
            return view('nthAdmins.nthtintuc.nthedit', ['nthtinTuc' => $nthtinTuc]);
        }

        // Handle the form submission for updating an existing news item ---------------------
        public function nthEditSubmit(Request $request, $id)
    {
        $validated = $request->validate([
            'nthTieuDe' => 'required|string|max:255',
            'nthMoTa' => 'required|string|max:500',
            'nthNoiDung' => 'required|string',
            'nthHinhAnh' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nthNgayDangTin' => 'required|date',
            'nthNgayCapNhap' => 'nullable|date',
            'nthTrangThai' => 'required|in:0,1',
        ]);

        // Retrieve the news article to update
        $nthtinTuc = NTH_TIN_TUC::findOrFail($id);

        // Handle image upload
        if ($request->hasFile('nthHinhAnh')) {
            // Delete old image if exists
            if ($nthtinTuc->nthHinhAnh) {
                Storage::delete('public/' . $nthtinTuc->nthHinhAnh);
            }

            $imagePath = $request->file('nthHinhAnh')->store('nthtinTuc', 'public');
            $nthtinTuc->nthHinhAnh = $imagePath;
        }

        // Update the news article
        $nthtinTuc->nthTieuDe = $request->nthTieuDe;
        $nthtinTuc->nthMoTa = $request->nthMoTa;
        $nthtinTuc->nthNoiDung = $request->nthNoiDung;
        $nthtinTuc->nthNgayDangTin = $request->nthNgayDangTin;
        $nthtinTuc->nthNgayCapNhap = $request->nthNgayCapNhap ?? now();
        $nthtinTuc->nthTrangThai = $request->nthTrangThai;
        $nthtinTuc->save();

        return redirect()->route('nthAdmins.nthtintuc')->with('success', 'Tin tức đã được cập nhật!');
    }

}
