<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class ViewController
{
    public function show_landing_page(): View
    {
        return view("landing", ["tittle" => "Landing page"]);
    }

    public function show_register_page(): View
    {
        return view("register.index", ["tittle" => "Register page"]);
    }

    public function show_login_page(): View
    {
        return view("login.index", ["tittle" => "Logins page"]);
    }

    public function show_home_page(): View
    {
        return view("home.index", [
            "tittle" => "Home page",
        ]);
    }

    public function show_profile_page(): View
    {
        return view("profile.index", [
            "tittle" => "Profile page",
        ]);
    }

    public function show_list_page(): View
    {
        return view("list.index", [
            "tittle" => "List page",
        ]);
    }

    public function show_list_siswa_page(): View
    {
        return view("list/siswa.view", [
            "tittle" => "List page",
            "siswa_siswa" => Siswa::latest()->get(),
            "date" => date("y-m-d"),
            "time" => date("H:i:s"),
        ]);
    }

    public function view_detail_siswa_page($nisn): View
    {
        return view("list/siswa.view_detail", [
            "tittle" => "List page",
            "siswa_siswa" => Siswa::where('nisn', $nisn)->get(),
        ]);
    }

    public function show_add_siswa_page(): View
    {
        return view("list/siswa/form.add", [
            "tittle" => "Add siswa page",
        ]);
    }

    public function show_scan_siswa_page(): View
    {
        return view("list/siswa/form.scan", [
            "tittle" => "Scan card page",
        ]);
    }

    public function show_edit_siswa_page($nisn): View
    {
        return view("list/siswa/form.edit", [
            "tittle" => "Edit page",
            "siswa_siswa" => Siswa::where('nisn', $nisn)->get(),
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect("/");
    }
}
