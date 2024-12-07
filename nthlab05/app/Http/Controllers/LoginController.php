<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function nthindex()
    {
        return view('nth-login');
    }
    public function nthloginSubmit(Request $request)
    {
        $res=$request->all();
        return $res;
    }
}
