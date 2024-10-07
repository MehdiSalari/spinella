<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Blog::orderByDesc("created_at")->paginate(8);
        return view('admin.blog', compact('posts'));
    }

    public function show(Blog $blog)
    {
        return view('admin.blog-details', compact('blog'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image_primary' => 'required|image',
            'title' => 'required|string',
            'image_left' => 'image',
            'image_right' => 'image',
            'upper_text' => 'required|string',
            'image_mid' => 'image',
            'mid_text' => 'string|nullable',
            'lower_text' => 'string|nullable',
            'user_id' => 'required|numeric|exists:users,id'
        ]);

        // dd($request->all());
        $slug = createSlug($request->input("title"));
        $slug = makeUniqueSlug($slug, 'blog');

        if($request->hasFile('image_primary')) {
            $image_primary = $request->file('image_primary');
            $image_primary_name = $slug . '-primary.' . $image_primary->getClientOriginalExtension();
            $image_primary->move(public_path("assets/images/blogs/$slug"), $image_primary_name);
        }
        if($request->hasFile('image_mid')) {
            $image_left = $request->file('image_left');
            $image_left_name = $slug . '-left.' . $image_left->getClientOriginalExtension();
            $image_left->move(public_path("assets/images/blogs/$slug"), $image_left_name);
        }

        if($request->hasFile('image_right')) {
            $image_right = $request->file('image_right');
            $image_right_name = $slug . '-right.' . $image_right->getClientOriginalExtension();
            $image_right->move(public_path("assets/images/blogs/$slug"), $image_right_name);
        }

        if($request->hasFile('image_mid')) {
            $image_mid = $request->file('image_mid');
            $image_mid_name = $slug . '-mid.' . $image_mid->getClientOriginalExtension();
            $image_mid->move(public_path("assets/images/blogs/$slug"), $image_mid_name);
        }

        Blog::create([
            'image_primary' => $image_primary_name,
            'title' => $request->input("title"),
            'image_left' => $image_left_name ?? null,
            'image_right' => $image_right_name ?? null,
            'upper_text' => $request->input("upper_text"),
            'image_mid' => $image_mid_name ?? null,
            'mid_text' => $request->input("mid_text") ?? null,
            'lower_text' => $request->input("lower_text") ?? null,
            'user_id' => $request->input("user_id"),
            'slug' => $slug
        ]);
        return redirect()->back();
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'image_primary' => 'image|required',
            'title' => 'string|required',
            'image_left' => 'image',
            'image_right' => 'image',
            'upper_text' => 'string|required',
            'image_mid' => 'image',
            'mid_text' => 'string|nullable',
            'lower_text' => 'string|nullable',
            'user_id' => 'numeric|exists:users,id'
        ]);

        if($request->hasFile('image_primary')) {
            $image_primary = $request->file('image_primary');
            $image_primary_name = $blog->image_primary;
            $image_primary->move(public_path("assets/images/blogs/$blog->slug"), $image_primary_name);
        }
        if($request->hasFile('image_left')) {
            $image_left = $request->file('image_left');
            $image_left_name = $blog->image_left;
            $image_left->move(public_path("assets/images/blogs/$blog->slug"), $image_left_name);
        }

        if($request->hasFile('image_right')) {
            $image_right = $request->file('image_right');
            $image_right_name = $blog->image_right;
            $image_right->move(public_path("assets/images/blogs/$blog->slug"), $image_right_name);
        }

        if($request->hasFile('image_mid')) {
            $image_mid = $request->file('image_mid');
            $image_mid_name = $blog->image_mid;
            $image_mid->move(public_path("assets/images/blogs/$blog->slug"), $image_mid_name);
        }

        $blog->update([
            'image_primary' => $image_primary_name ?? $blog->image_primary,
            'title' => $request->input("title") ?? $blog->title,
            'image_left' => $image_left_name ?? $blog->image_left,
            'image_right' => $image_right_name ?? $blog->image_right,
            'upper_text' => $request->input("upper_text") ?? $blog->upper_text,
            'image_mid' => $image_mid_name ?? $blog->image_mid,
            'mid_text' => $request->input("mid_text") ?? $blog->mid_text,
            'lower_text' => $request->input("lower_text") ?? $blog->lower_text,
            'user_id' => $request->input("user_id") ?? $blog->user_id
        ]);
        return redirect()->back();
    }

    public function updateStatus(Request $request, Blog $blog )
    {
        $blog->update([
            'status' => $request->input('status')
        ]);
        return redirect()->back();
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('admin.blog.index');
    }
}
