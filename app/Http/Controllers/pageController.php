<?php

namespace App\Http\Controllers;

use App\Models\Blog;
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
        $blogs = Blog::orderByDesc("created_at")->paginate(6);
        return view('blog', compact('blogs', 'settings'));
    }

    public function blogSingle($slug)
    {
        $settings = Setting::find(1);
        $blog = Blog::where('slug', $slug)->first();
        return view('blog-single', compact('blog', 'settings'));
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
