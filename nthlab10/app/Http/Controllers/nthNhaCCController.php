<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class nthNhaCCController extends Controller
{
    //
    public function list()
    {
        $nthNhaCCs = nthNhaCC::all();
        return view('nthNhaCC.List',['nthNhaCCs'=>$nthNhaCCs]);
    }
}
