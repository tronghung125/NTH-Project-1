<?php

namespace App\Http\Controllers;
use App\Models\nthNhaCC;
use Illuminate\Http\Request;
class nthNhaCCController extends Controller
{
    //
    public function list()
    {
        $nthNhaCCs = nthNhaCC::paginate(10);
        return view('nthNhaCC.List',['nthNhaCCs'=>$nthNhaCCs]);
    }
}
