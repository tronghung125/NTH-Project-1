<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NTH_QUAN_TRI;

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
        return view('nthLogin.nthloginsubmit', ['nthquantri'=>$nthquantri]);
    }
}
