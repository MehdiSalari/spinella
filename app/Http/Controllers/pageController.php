<?php

namespace App\Http\Controllers;

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
}
