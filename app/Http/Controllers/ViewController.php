<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Absent;
use App\Models\ClassRoom;
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
            "siswa_siswa" => Siswa::with("class_room")->latest()->get(),
            "date" => date("y-m-d"),
            "time" => date("H:i:s"),
        ]);
    }

    public function view_detail_siswa_page($nisn): View
    {
        return view("list/siswa.view_detail", [
            "tittle" => "List page",
            "siswa_siswa" => Siswa::with("class_room")->where('nisn', $nisn)->get(),
        ]);
    }

    public function show_add_siswa_page(): View
    {
        return view("list/siswa/form.add", [
            "tittle" => "Add siswa page",
            "classrooms" => ClassRoom::latest()->get(),
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
            "classrooms" => ClassRoom::latest()->get(),
        ]);
    }

    public function show_list_kelas_page(): View
    {
        return view("list/kelas.view", [
            "tittle" => "List page",
            "classrooms" => ClassRoom::latest()->get(),
            "date" => date("y-m-d"),
            "time" => date("H:i:s"),
        ]);
    }

    public function show_add_kelas_page(): View
    {
        return view("list/kelas/form.add", [
            "tittle" => "Add siswa page",
        ]);
    }

    public function show_delete_kelas_page(): View
    {
        return view("list/kelas/form.delete", [
            "tittle" => "delete siswa page",
            "angkatan" => ClassRoom::select("angkatan")->distinct()->pluck('angkatan'),
        ]);
    }

    public function show_edit_kelas_page($id): View
    {
        return view("list/kelas/form.edit", [
            "tittle" => "Edit page",
            "classrooms" => ClassRoom::where('id', $id)->get(),
        ]);
    }

    public function show_list_absen_page(): View
    {
        return view("list/absen.view", [
            "tittle" => "List page",
            // "absents" => Absent::latest()->get(),
            "date" => date("y-m-d"),
            "time" => date("H:i:s"),
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
