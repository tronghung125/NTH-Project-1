<?php

namespace App\Http\Controllers;
use App\Models\NTH_CT_HOA_DON; 
use App\Models\NTH_SAN_PHAM; 
use App\Models\NTH_HOA_DON; 

use Illuminate\Http\Request;

class NTH_CT_HOA_DONController extends Controller
{
    //
    public function nthList()
    {
        $nthcthoadons = NTH_CT_HOA_DON::all();
        return view('nthAdmins.nthcthoadon.nthList',['nthcthoadons'=>$nthcthoadons]);
    }
    public function nthDetail($id)
    {
        $nthcthoadon = NTH_CT_HOA_DON::where('id', $id)->first();

        return view('nthAdmins.nthcthoadon.nthdetail', ['nthcthoadon' => $nthcthoadon]);
    }

     // create-----------------------------------------------------------------------------------------------------------------------------------------
    public function nthCreate()
    {
        $nthhoadon = NTH_HOA_DON::all();
        $nthsanpham = NTH_SAN_PHAM::all();
        return view('nthAdmins.nthcthoadon.nthcreate',['nthhoadon'=>$nthhoadon,'nthsanpham'=>$nthsanpham]);
    }
     //post-----------------------------------------------------------------------------------------------------------------------------------------
    public function nthCreateSubmit(Request $request)
    {
         // Xác thực dữ liệu yêu cầu dựa trên các quy tắc xác thực
        $validate = $request->validate([
            'nthHoaDonID' => 'required|exists:nth_hoa_don,id',
            'nthSanPhamID' => 'required|exists:nth_san_pham,id',
            'nthSoLuongMua' => 'required|numeric',  
            'nthDonGiaMua' => 'required|numeric',
            'nthThanhTien' => 'required|numeric',  
            'nthTrangThai' => 'required|in:0,1,2',
        ]);
     
        $nthcthoadon = new NTH_CT_HOA_DON;
     
        $nthcthoadon->nthHoaDonID = $request->nthHoaDonID;
        $nthcthoadon->nthSanPhamID = $request->nthSanPhamID;  
        $nthcthoadon->nthSoLuongMua = $request->nthSoLuongMua;
        $nthcthoadon->nthDonGiaMua = $request->nthDonGiaMua;
        $nthcthoadon->nthThanhTien = $request->nthThanhTien;
        $nthcthoadon->nthTrangThai = $request->nthTrangThai;
     
        $nthcthoadon->save();
     
        return redirect()->route('nthAdmins.nthcthoadon');
    }

    public function nthEdit($id)
    {
        $nthhoadon = NTH_HOA_DON::all();
        $nthsanpham = NTH_SAN_PHAM::all();

        $nthcthoadon = NTH_CT_HOA_DON::where('id', $id)->first();

        if (!$nthcthoadon) 
        {
            return redirect()->route('nthAdmins.nthcthoadon')->with('error', 'Không tìm thấy chi tiết hóa đơn!');
        }

        return view('nthAdmins.nthcthoadon.nthEdit', [
            'nthhoadon' => $nthhoadon,
            'nthsanpham' => $nthsanpham,
            'nthcthoadon' => $nthcthoadon
        ]);
    }

    public function nthEditSubmit(Request $request,$id)
    {
        $validate = $request->validate([
            'nthHoaDonID' => 'required|exists:nth_hoa_don,id',
            'nthSanPhamID' => 'required|exists:nth_san_pham,id',
            'nthSoLuongMua' => 'required|numeric',  
            'nthDonGiaMua' => 'required|numeric',
            'nthThanhTien' => 'required|numeric',  
            'nthTrangThai' => 'required|in:0,1,2',
        ]);
         
      
        $nthcthoadon = NTH_CT_HOA_DON::where('id', $id)->first();
      
        $nthcthoadon->nthHoaDonID = $request->nthHoaDonID;
        $nthcthoadon->nthSanPhamID = $request->nthSanPhamID;  
        $nthcthoadon->nthSoLuongMua = $request->nthSoLuongMua;
        $nthcthoadon->nthDonGiaMua = $request->nthDonGiaMua;
        $nthcthoadon->nthThanhTien = $request->nthThanhTien;
        $nthcthoadon->nthTrangThai = $request->nthTrangThai;
      
        $nthcthoadon->save();
                return redirect()->route('nthAdmins.nthcthoadon');
    }

    public function nthDelete($id)
    {
        NTH_CT_HOA_DON::where('id',$id)->delete();
        return back()->with('cthoadon_deleted','Đã xóa Khách hàng thành công!');
    }
}
