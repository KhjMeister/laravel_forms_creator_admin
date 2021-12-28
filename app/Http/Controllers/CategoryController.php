<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File; 


class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $allCategory =  Category::all();
        return view('category.index',compact('allCategory'));
    }
    public function create()
    {
        return view('category.create');
    }
    public function store(Request $request)
    {
        $category = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            // 'img_url' => ['required','image']
        ]);
        if($image = $request->hasfile('img_url')){
            $filename  = $request->file('img_url')->getClientOriginalName();
            $path = $request->file('img_url')->move(public_path().'/uploads/',$filename);      
        }

         DB::table('categories')->insert([
             'name' => $category['name'],
            'img_url' =>$filename,
            'u_id' => 1,
            'active_state' => 0,
        ]);
        return redirect('categories');
    }
    public function show($id)
    {
        $category = Category::find($id);
        return view('category.single',compact('category'));
    }
    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.edite',compact('category'));
    }

    public function update($id, Request $request)
    {
        $categ = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'old_img_url' => ['required']
        ]);
        if($image = $request->hasfile('img_url')){
            $category = Category::find($id);
            File::delete('uploads/'.$category->img_url);
            $filename  = $request->file('img_url')->getClientOriginalName();
            $path = $request->file('img_url')->move(public_path().'/uploads/',$filename);
            DB::table('categories')->where('id',$id)->update([
                'name' => $categ['name'],
               'img_url' =>$filename,
           ]);
        } else {
            DB::table('categories')->where('id',$id)->update([
                'name' => $categ['name'],
               'img_url' =>$categ['old_img_url']
           ]);
        }
        
         
        return redirect('categories');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        File::delete('uploads/'.$category->img_url);
        Category::destroy($id);
        return redirect()->back()->with('success', 'دسته  حذف شد');;
    }
}
