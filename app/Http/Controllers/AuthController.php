<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request) {
        return view("auth.login");
    }

    public function register(Request $request) {
        return view("auth.register");
    }

    public function storeLogin(Request $request) {
        $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if(Auth::user()->role_id != 1) {
                return redirect()->route("customer.landing_page");
            }

            return redirect()->route("dashboard");
        }

        return redirect()->back()->with("error", "email or password didnt match");
    }

    public function storeRegister(Request $request) {
        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:users,email",
            "password" => "required",
            "phone" => "required",
            "address" => "required"
        ]);

        $profile = Profile::create([
            "address" => $request->address,
            "phone" => $request->phone
        ]);

        User::create([
            "name" => $request->name,
            "password" => bcrypt($request->password),
            "email" => $request->email,
            "profile_id" => $profile->id,
            "role_id" => 2
        ]);

        return redirect()->route("login");
    }

    public function logout() {
        Auth::logout();
        return redirect()->route("login");
    }
}