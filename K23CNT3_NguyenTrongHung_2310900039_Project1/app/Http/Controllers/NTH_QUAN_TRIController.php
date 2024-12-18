<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NTH_QUAN_TRIController extends Controller
{
    //Login
    public function nthLogin()
    {
        return view('nthLogin.nthlogin');
    }
    
    public function nthLoginSubmit(Request $request)
    {
        return view('nthLogin.nthlogin');
    }
}
