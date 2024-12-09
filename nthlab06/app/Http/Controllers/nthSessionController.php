<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nthSessionController extends Controller
{
    //Đọc dữ liệu session
    public function nthGetSessionData(Request $request)
    {
    if($request->session()->has('K23CNT3-NTH'))
        {
            echo "<h2> Session Data :". $request->session()->get('K23CNT3-NTH');
        }
        else
        {
            echo "<h2> Không có dữ liệu trong session </h2>";
        }
    }

    public function nthStoreSessionData(Request $request)
    {
        //Lưu dữ liệu session
        $request->session()->put('K23CNT3-NTH','K23CNT3-Nguyễn Trọng Hưng-2310900039');
        echo "<h2> Dữ liệu đã được lưu và session </h2>";
    }

    public function nthDeleteSessionData(Request $request)
    {
        //Xoá dữ liệu session
        $request->session()->forget('K23CNT3-NTH');
        echo "<h2> Dữ liệu đã được xóa khỏi session </h2>";
    }
}
