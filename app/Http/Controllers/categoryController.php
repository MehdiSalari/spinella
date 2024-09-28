<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view("admin/categories", compact("categories"));
    }

    public function store(Request $request){
        $request->validate([
            "title" => "required",
        ]);
        $category = new Category();
        $category->title = $request->input("title");
        $category->save();
        return redirect()->back();
    }

    public function update(Request $request, $id){
        $request->validate([
            "title" => "required",
        ]);
        $category = Category::find($id);
        $category->title = $request->input("title");
        $category->save();
        return redirect()->back();
    }

    public function destroy($id){
        $category = Category::find($id);
    
        if (!$category) {
            return response()->json(['message' => 'Category not found'], 404);
        }
    
        $category->delete();
    
        return response()->json(['success' => true], 200);
    }
    
    
}
