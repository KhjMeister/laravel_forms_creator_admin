<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class qnrController extends Controller
{
    public function index($qnrurl)
    {
       
        return view('pages.qnr',compact('qnrurl'));
    }
}
