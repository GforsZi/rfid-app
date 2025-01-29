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
            "jam_masuk" => "required",
            "jam_istirahat_1" => "required",
            "jam_kembali_1" => "required",
            "jam_istirahat_2" => "required",
            "jam_kembali_2" => "required",
            "jam_pulang" => "required",
        ]);

        schedule::create($validateData);

        return redirect("/setting/jadwal")->with("success", "account created");
    }

    public function update(Request $request, $id)
    {
        $jadwal = schedule::where("id", $id)->first();

        $validatedData = $request->validate([
            "mode" => "required",
            "jam_masuk" => "required",
            "jam_istirahat_1" => "required",
            "jam_kembali_1" => "required",
            "jam_istirahat_2" => "required",
            "jam_kembali_2" => "required",
            "jam_pulang" => "required",
        ]);

        if (!$jadwal) {
            return redirect("/setting/jadwal")->with(
                "error",
                "data not found"
            );
        }

        $jadwal->update($validatedData);

        return redirect("/setting/jadwal")->with(
            "success",
            "data has been updated"
        );
    }
}
