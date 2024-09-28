<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function loginView(){
        return view("admin/login");
    }

    public function login(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        
        $username = $request->input('username');
        $password = $request->input('password');
        

        if($username == "admin" && $password == "admin"){
            auth()->loginUsingId(1);
            return redirect()->route("admin.dashboard");
        } else {
            return redirect()->back()->withErrors(["auth" => "Wrong username or password"])->withInput();
        }
    }

    public function logout(){
        auth()->logout();
        return redirect()->route("login");
    }

    public function dashboard(){
        return view("admin/dashboard");
    }

    // public function productList(){
    //     $categories = Category::all();
    //     $products = Product::all();
    //     return view("admin/products", compact("categories", "products"));
    // }
}
