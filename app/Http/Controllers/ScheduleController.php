<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\schedule;

class ScheduleController
{
    public function store(Request $request)
    {
        $time = date("H:i:s");
        $date = date("y-m-d");

        $schedule = schedule::all()->count();

        $validateData = $request->validate([
            "mode" => "required | string",
            "jam_masuk" => "required",
            "jam_istirahat" => "required",
            "jam_kembali" => "required",
            "jam_pulang" => "required",
        ]);

        if ($schedule >= 1) {
            schedule::create($validateData);
        } else {
            schedule::where("id", 1)->update($validateData);
        }

        schedule::create($validateData);
        return redirect("/list/siswa")->with("success", "account created");
    }
}
