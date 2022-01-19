<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class qnrController extends Controller
{
    public function index($qnrurl)
    {
       $ipp = request()->ip();
        return view('pages.qnr',compact('qnrurl','ipp'));
    }
}
