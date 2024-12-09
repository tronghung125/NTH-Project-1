<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class nthAccountController extends Controller
{
    public function nthlogin()
    {
        return view('nth-login');
    }
    public function nthloginSubmit(Request $request)
    {
        $validation = $request->validate
        (
            [
                'nthemail'=>'required|email',
                'nthpass'=>'required|min:6'
            ]
        );
        //check login -> store session-> redicted home
        $nthemail = $request ->input('nthemail');
        $nthpass = $request ->input('nthpass');

        $nthLoginSession =[
            'nthemail'=>$nthemail,
            'nthpass'=>$nthpass
        ];

        $nth_json = json_encode($nthLoginSession);

        if($nthemail == "nth@gmail.com" && $nthpass=="123123")
        {
            //lưu session
            $request->session()->put('K23CNT3-NguyenTrongHung',$nthemail);
            return redirect('/');
        }
        return redirect()->back()->with('nth-error','Lỗi');
    }
    public function nthlogout(Request $request)
     {
         //Xoá dữ liệu session
        $request->session()->forget('K23CNT3-NguyenTrongHung');
        $request->session()->flush();
        return redirect('/');
    }
    
}
