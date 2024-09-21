<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class faPageController extends Controller
{
    public function home()
    {
        $settings = Setting::find(1);
        return view('fa.home', compact('settings'));
    }
}
