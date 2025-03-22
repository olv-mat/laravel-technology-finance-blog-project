<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\{
    Hash,
    Auth
};

class RegisterController extends Controller
{
    public function register()
    {
        return view("register");
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $data["password"] = Hash::make($data["password"]);
        $user = User::create($data);
        Auth::login($user);
        return to_route("blog");
    }
}
