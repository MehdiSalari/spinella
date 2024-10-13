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
        return view('home');
    }

    public function blog()
    {
        $blogs = Blog::orderByDesc("created_at")->paginate(6);
        return view('blog', compact('blogs'));
    }

    public function blogSingle($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        return view('blog-single', compact('blog'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }

    public function products()
    {
        //** uncommet line below to active products link */
        return redirect('/');

        $products = Product::all();
        $categories = Category::all();
        return view('products', compact('products', 'categories'));
    }
}
