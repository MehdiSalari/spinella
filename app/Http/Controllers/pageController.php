<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;

class pageController extends Controller
{
    public function home()
    {
        $settings = Setting::find(1);
        return view('home', compact('settings'));
    }

    public function blog()
    {
        $settings = Setting::find(1);
        return view('blog', compact('settings'));
    }

    public function blogSingle()
    {
        $settings = Setting::find(1);
        return view('blog-single', compact('settings'));
    }

    public function contact()
    {
        $settings = Setting::find(1);
        return view('contact', compact('settings'));
    }

    public function about()
    {
        $settings = Setting::find(1);
        return view('about', compact('settings'));
    }

    public function products()
    {
        $settings = Setting::find(1);
        $products = Product::all();
        $categories = Category::all();
        return view('products', compact('settings', 'products', 'categories'));
    }
}
