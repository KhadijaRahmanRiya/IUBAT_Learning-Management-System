<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list()
    {
        $categories=Category::all();
        return view('backend.pages.category.list',compact ('categories'));
    }
    public function form()
    {
        return view('backend.pages.category.form');
    }
    public function store(Request $request)
    {
        Category::create([
            'category_name'=>$request->Name,

            'category_description'=>$request->Description,
        ]);

        return redirect()->route('category.list');
    }


    public function view($id)
   {
    $data=Category::find($id);
    return view('backend.pages.category.view',compact('data'));
    }
public function delete($id)

{
     Category::find($id)->delete();

    return redirect()->back();
}



};
