<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

// View Routing

Route::get("/", [ViewController::class, "show_landing_page"])->middleware("guest");

Route::get("/register", [ViewController::class, "show_register_page"])->middleware("guest");

Route::get("/login", [ViewController::class, "show_login_page"])->name("login")->middleware("guest");

Route::get("/home", [ViewController::class, "show_home_page"])->middleware("auth");

Route::get("/profile", [ViewController::class, "show_profile_page"])->middleware("auth");

Route::get("/list", [ViewController::class, "show_list_page"])->middleware("auth");

Route::get("/list/siswa", [ViewController::class, "show_list_siswa_page"])->middleware("auth");

Route::get("/list/siswa/add", [ViewController::class, "show_add_siswa_page"])->middleware("auth");

Route::get("/list/siswa/scan", [ViewController::class, "show_scan_siswa_page"])->middleware("auth");

Route::get("/list/siswa/{nisn}", [ViewController::class, "view_detail_siswa_page"])->middleware("auth");

Route::get("/list/siswa/{nisn}/edit", [ViewController::class, "show_edit_siswa_page"])->middleware("auth");

Route::get("/logout", [ViewController::class, "logout"])->middleware("auth");


// Api Routing

Route::post("/users/register", [UserController::class, "store"])->middleware("guest");

Route::post("/users/login", [UserController::class, "auth"])->middleware("guest");

Route::post("/siswa/add", [SiswaController::class, "store"])->middleware("auth");

Route::get("/siswa/scan", [SiswaController::class, "tmp_rfid"])->middleware("auth");

Route::delete("/siswa/{nisn}", [SiswaController::class, "delete"])->middleware("auth");

Route::put("/siswa/{nisn}", [SiswaController::class, "update"])->middleware("auth");
