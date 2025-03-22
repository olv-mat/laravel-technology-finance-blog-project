<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view("login"); 
    }

    public function auth(Request $request)
    {
        if (!Auth::attempt($request->only(["email", "password"]))) {
            return redirect()->back();
        }
        return to_route("blog");
    }

    public function logout()
    {
        Auth::logout();
        return to_route("login");
    }
}
