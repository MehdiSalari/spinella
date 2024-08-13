<?php
namespace App\Controllers;
use App\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view("admin/dashboard");
    }

    public function products()
    {
        return view("admin/products");
    }

    public function settings()
    {
        return view("admin/settings");
    }

    public function admins()
    {
        return view("admin/admins");
    }

    public function mail()
    {
        return view("admin/mail");
    }

    public function blog()
    {
        return view("admin/blog");
    }
}