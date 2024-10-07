<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        // $settings = Setting::where('page', $page)->get()->toArray();
        // return view('admin.settings', compact('settings'));
        return redirect('admin/settings/home');
    }

    public function home()
    {
        return view('admin.settings.home');
    }

    public function blog()
    {
        return view('admin.settings.blog');
    }

    public function about()
    {
        return view('admin.settings.about-us');
    }

    public function contact()
    {
        return view('admin.settings.contact-us');
    }

    public function products()
    {
        return view('admin.settings.products');
    }

    public function update(Request $request, $page, $lang)
    {
        $setting = Setting::where('page', $page)->where('lang', $lang)->first();
        $setting->update($request->all());
        return redirect()->back();
    }
}
