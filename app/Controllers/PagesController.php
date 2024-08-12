<?php
namespace App\Controllers;
use App\Controllers\Controller;


class PagesController extends Controller
{
    public function home()
    {   
        return view("home");
    }

    // public function shop()
    // {
    //     return view("shop");
    // }

    public function products()
    {
        return view("products");
    }

    public function blog()
    {
        return view("blog");
    }

    public function about()
    {
        return view("about");
    }

    public function contact()
    {
        return view("contact");
    }

    public function admin()
    {
        return view("admin/dashboard");
    }
}