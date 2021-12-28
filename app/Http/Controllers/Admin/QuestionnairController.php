<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Questionnair;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class QuestionnairController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.questionnair.index');
    }

    public function create()
    {
        return view('admin.questionnair.create');
    }

    public function store(Request $request)
    {
        $questionnair = $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
       
         DB::table('questionnairs')->insert([
            'qname' => $questionnair['name'],
            'u_id' => Auth::id(),
            'c_id' => 1 ,
            'qstate' => 0
            
        ]);
        return redirect('create');
    }
}
