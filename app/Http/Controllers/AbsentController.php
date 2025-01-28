<?php

namespace App\Http\Controllers;

use App\Models\Absent;
use App\Models\schedule;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AbsentController
{
    public function store(Request $request)
    {
        $time = date("H:i:s");
        $date = date("y-m-d");

        $jadwal = schedule::get();
        $jam = [$jadwal->jam_masuk, $jadwal->jam_istirahat, $jadwal->jam_kembali, $jadwal->jam_pulang];
        dd($jam);
        $jamFormatted = Carbon::createFromFormat('H:i:s', $jam)->format('H');
        $saat_ini = Carbon::now()->format("H");

        $validateData = $request->validate([
            "rfid" => "required | exists:siswas,rfid",
        ]);

        if ($jadwal->mode == "otomatsi") {
        } else {
            # code...
        }


        Absent::create($validateData);
        return redirect("/list/absen")->with("success", "account created");
    }
}
