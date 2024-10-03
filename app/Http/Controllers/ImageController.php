<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function uploadImage(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '-' . $file->getClientOriginalName();
            $path = $file->storeAs('uploads', $filename, 'public');

            return response()->json(['location' => "/storage/$path"]);
        }

        return response()->json(['error' => 'No file uploaded'], 400);
    }
}