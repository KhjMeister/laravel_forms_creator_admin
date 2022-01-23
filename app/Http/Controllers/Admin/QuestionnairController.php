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
    public function getCurrentUserId()
    {
        return Auth::id();
    }
    public function index()
    {
        // $questionnair = Questionnair::get()->where(
        //     'u_id' , $this->getCurrentUserId(),
        // );
        return view('admin.questionnair.index');
    }
    public function showResults($qnairId)
    {
        return view('admin.questionnair.Results',compact('qnairId'));
    }

    

    // public function create()
    // {
    //     return view('admin.questionnair.create');
    // }

    // public function store(Request $request)
    // {
    //     $questionnair = $request->validate([
    //         'name' => ['required', 'string', 'max:255'],
    //     ]);
       
    //     DB::table('questionnairs')->insert([
    //         'qname' => $questionnair['name'],
    //         'u_id' => $this->getCurrentUserId(),
    //         'c_id' => 1 ,
    //         'qstate' => 0
    //     ]);

    //     return redirect()->back();
    // }
    // public function show($id)
    // {
    //     $questionnair = Questionnair::find($id);
    //     return view('admin.questionnair.single',compact('questionnair'));
    // }
    // public function edit($id)
    // {
    //     $questionnair = Questionnair::find($id);
    //     return view('admin.questionnair.edite',compact('questionnair'));
    // }
    // public function destroy($id)
    // {
    //     // $questionnair = Questionnair::find($id);
        
    //     Questionnair::destroy($id);
    //     return redirect()->back()->with('success', 'پرسشنامه  حذف شد');;
    // }
    // public function update($id, Request $request)
    // {
    //     $quest = $request->validate([
    //         'qname' => ['required', 'string', 'max:255'],
    //     ]);
    //         // $questionnair = Questionnair::find($id);
    //         DB::table('questionnairs')->where('id',$id)->update([
    //             'qname' => $quest['qname'],     
    //        ]);
 
    //     return redirect('questionnair');
    // }
}
