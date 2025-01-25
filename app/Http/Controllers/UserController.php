<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController
{
    public function store(Request $request)
    {
        if ($request["password"] !== $request["confirm_password"]) {
            return redirect("/register");
            exit();
        }
        $validateData = $request->validate([
            "name" => "required | min:3 | max:255",
            "email" => "required | email:dns | unique:users,email",
            "password" => "required | min:5 | max:30",
        ]);

        $validateData["password"] = Hash::make($validateData["password"]);

        User::create($validateData);
        return redirect("/login")->with("success", "account created");
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            "email" => "required | max:255",
            "password" => "required | max:255",
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended("/home")->with("success", "Login success!");
        }

        return back()->with("errorLogin", "Login failed!");
    }
}
