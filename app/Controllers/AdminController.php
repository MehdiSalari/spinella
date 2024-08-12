<?php
namespace App\Controllers;
use App\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view("admin/pages/dashboard");
    }

    public function products()
    {
        return view("admin/pages/products");
    }

    public function settings()
    {
        return view("admin/pages/settings");
    }

    public function admins()
    {
        return view("admin/pages/admins");
    }
}