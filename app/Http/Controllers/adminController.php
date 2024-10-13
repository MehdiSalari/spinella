<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Product;
use App\Models\Ticket;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
    public function loginView(){
        return view("admin/login");
    }

    public function login(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        
        $username = $request->input('username');
        $password = $request->input('password');
        
        $user = User::where(function ($query) use ($username) {
            $query->where('username', $username)->orWhere('email', $username);
        })->first();
        
        if($user && Hash::check($password, $user->password)){
            //if user not active
            if($user->status == 0){
                return redirect()->back()->withErrors(["auth" => "Your account is not active"])->withInput();
            }
            // login
            auth()->loginUsingId($user->id);
            // save login
            if($request->remember_me){
                $request->session()->put("admin", $username);
                $request->session()->put("admin_id", $user->id);
            } else {
                if($request->session()->has("admin")){
                    $request->session()->remove("admin");
                    $request->session()->remove("admin_id");
                }
            }
            return redirect()->route("admin.dashboard");
        } else {
            return redirect()->back()->withErrors(["auth" => "Wrong username or password"])->withInput();
        }
    }

    public function logout(){
        auth()->logout();
        return redirect()->route("login");
    }

    public function dashboard(){
        $products = Product::all()->count();
        $blogs = Blog::all()->count();
        $tickets= Ticket::all()->count();

        return view("admin/dashboard", compact('products', 'blogs', 'tickets'));
    }

    public function admins() {
        $users = User::all();
        $superAdmins = User::where("role", "superadmin")->get();
        return view("admin/admins", compact('users', 'superAdmins'));
    }

    public function createAdmin(Request $request) {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
            'role' => 'required',
            'status'=> 'numeric',
        ]);
        // dd($request->all());

        User::create([
            "name" => $request->input("name"),
            "username" => $request->input("username"),
            "email" => $request->input("email"),
            "password" => bcrypt($request->input("password")),
            "role" => $request->input("role"),
            "status" => $request->input("status"),
            "email_verified_at" => now()
        ]);
        return redirect()->back()->with("success", "Admin created successfully");
    }

    public function destroy($id) {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json([
            'success' => true,
            'message' => 'Admin deleted successfully.'
        ]);
    }

    public function updateStatus(Request $request) {
        $user = User::findOrFail($request->id);

        if (!$user) {
            return response()->json(['success' => false, 'message' => 'User not found'], 404);
        }

        $user->status = $request->status;
        $user->save();

        return response()->json([
            'success' => true,
            'message' => 'Status updated successfully.'
        ]);
    }

    public function update(Request $request, $id) {
        try{
            $user = User::findOrFail($request->adminId);

            $request->validate([
                'name' => 'required',
                'username' => 'required|unique:users,username,'.$user->id,
                'email' => 'required|email|unique:users,email,'.$user->id,
                'role' => 'required',
                'status'=> 'numeric',
            ]);

            if ($request->last_password || $request->new_password) {
                if (!Hash::check($request->last_password, $user->password)) {
                    return redirect()->back()->with('error', 'Wrong password');
                }
                $user->password = bcrypt($request->new_password);
            }

            $user->name = $request->input("name");
            $user->username = $request->input("username");
            $user->email = $request->input("email");
            $user->role = $request->input("role");
            $user->status = $request->input("status");
            $user->save();
            return redirect()->back()->with("success", "Admin updated successfully");
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage());
        }
    }
}
