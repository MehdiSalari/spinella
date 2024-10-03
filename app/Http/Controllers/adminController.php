<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Product;
use App\Models\Ticket;
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
            // save login
            if($request->remember_me){
                $request->session()->put("admin", $username);
                $request->session()->put("admin_id", 1);
            } else {
                if($request->session()->has("admin")){
                    $request->session()->remove("admin");
                    $request->session()->remove("admin_id");
                }
            }
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
        $products = Product::all()->count();
        $blogs = Blog::all()->count();
        $tickets= Ticket::all()->count();

        return view("admin/dashboard", compact('products', 'blogs', 'tickets'));
    }

    // public function productList(){
    //     $categories = Category::all();
    //     $products = Product::all();
    //     return view("admin/products", compact("categories", "products"));
    // }
}
