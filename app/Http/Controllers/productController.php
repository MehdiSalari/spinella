<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::all();
        return view("admin/products", compact("categories", "products"));
    }

    public function store(Request $request)
    {
        $request->validate([
            "title" => "required",
            "category_id" => "required|numeric",
            "description" => "required|min:10",
            "image" => "required|image"
        ]);

        $slug = createSlug($request->input("title"));
        $slug = makeUniqueSlug($slug, 'product');

        $image = $request->file("image");
        $imageName = $slug . '.' . $image->getClientOriginalExtension();
        $is_moved = $image->move(public_path("assets/images/products"), $imageName);;
        if ($is_moved) {
            $product = new Product();
            $product->title = $request->input("title");
            $product->category_id = $request->input("category_id");
            $product->description = $request->input("description");
            $product->price = $request->input("price");
            $product->slug = $slug;
            $product->stock = $request->input("stock");
            $product->image = $imageName;
            $product->save();
            return redirect()->back();
        } else {
            throw new \Exception("Image Upload Failed");
        }
    }

    public function update(Request $request, $id)
    {
        try{
            $product = Product::find($id);
            // dd($request->all());
            $request->validate([
                "title" => "required|string",
                "category_id" => "required|numeric",
                "description" => "required|min:10",
                "image" => "image",
            ]);

            $slug = createSlug($request->input("title"));
            $slug = makeUniqueSlug($slug, 'product');
            $image = $product->image;
            if ($request->hasFile("image")) {
                $image = $request->file("image");
                $imageName = $slug . '.' . $image->getClientOriginalExtension();
                $is_moved = $image->move(public_path("assets/images/products"), $imageName);;
                if ($is_moved) {
                    $image = $imageName;
                } else {
                    throw new Exception("Image Upload Failed");
                }
            }

            $product->slug = $slug;
            $product->stock = $request->input("stock");
            $product->title = $request->input("title");
            $product->category_id = $request->input("category_id");
            $product->description = $request->input("description");
            $product->price = $request->input("price");
            $product->image = $image;
            $product->save();
            return redirect()->back();
        } catch (Exception $e) {
            dd($e->getMessage() , $e->getLine());
        }
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back();
    }

    public function updateStatus(Request $request){
        $product = Product::find($request->id);
    
        if (!$product) {
            return response()->json(['success' => false, 'message' => 'Product not found'], 404);
        }
    
        $product->status = $request->status;
        $product->save();
    
        return response()->json(['success' => true, 'message' => 'Status updated successfully'], 200);
    }

    public function destroy($id){
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $product->delete();
        return response()->json(['success'=> true, 'message'=> 'Product deleted successfully'], 200);
    }
}
