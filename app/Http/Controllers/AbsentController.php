<?php

namespace App\Http\Controllers;

use App\Models\Absent;
use App\Models\schedule;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AbsentController
{
    public function store(Request $request)
    {
        $time = date("H:i:s");
        $date = date("y-m-d");

        // SQLITE
        $jadwal = DB::table("schedules")->selectRaw("mode, strftime(jam_masuk) as jam_masuk, strftime(jam_istirahat_1) as jam_istirahat_1, strftime(jam_kembali_1) as jam_kembali_1, strftime(jam_istirahat_2) as jam_istirahat_2, strftime(jam_kembali_2) as jam_kembali_2, strftime(jam_pulang) as jam_pulang")->get()->toArray();

        // MYSQL
        // $jadwal = DB::table("schedules")->selectRaw("HOUR(jam_masuk) as jam_masuk, HOUR(jam_istirahat_1) as jam_istirhat_1, HOUR(jam_kembali_1) as jam_kembali_1, HOUR(jam_istirahat_2) as jam_istirahat_2, HOUR(jam_kembali_2) as jam_kembali_2, HOUR(jam_pulang) as jam_pulang")->get();

        $absen = Absent::where("tanggal", $date)->get()->count();

        $jam = $jadwal[0];

        $jam_masuk_Formatted = Carbon::createFromFormat('H:i', $jam->jam_masuk)->format('H');
        $jam_istirahat_1_Formatted = Carbon::createFromFormat('H:i', $jam->jam_istirahat_1)->format('H');
        $jam_kembali_1_Formatted = Carbon::createFromFormat('H:i', $jam->jam_kembali_1)->format('H');
        $jam_istirahat_2_Formatted = Carbon::createFromFormat('H:i', $jam->jam_istirahat_2)->format('H');
        $jam_kembali_2_Formatted = Carbon::createFromFormat('H:i', $jam->jam_kembali_2)->format('H');
        $jam_pulang_Formatted = Carbon::createFromFormat('H:i', $jam->jam_pulang)->format('H');

        $saat_ini = Carbon::now()->format("H");

        $validateData = $request->validate([
            "rfid" => "required | exists:siswas,rfid",
        ]);

        if ($jam->mode == "otomatis") {
            if ($saat_ini <= $jam_masuk_Formatted) {
                dd("selamat datang");
            } elseif ($saat_ini > $jam_masuk_Formatted && $saat_ini <= $jam_istirahat_1_Formatted) {
                dd("selamat istirahat 1");
            } elseif ($saat_ini > $jam_istirahat_1_Formatted && $saat_ini <= $jam_kembali_1_Formatted) {
                dd("selamat kembali dari istirahat 1");
            } elseif ($saat_ini > $jam_kembali_1_Formatted && $saat_ini <= $jam_istirahat_2_Formatted) {
                dd("selamat istirahat 2");
            } elseif ($saat_ini > $jam_istirahat_2_Formatted && $saat_ini <= $jam_kembali_2_Formatted) {
                dd("selamat kembali dari istirahat 2");
            } else {
                dd("selamat pulang");
            }
        } else {
            if ($jam->mode == "masuk") {
                dd("selamat datang");
            } elseif ($jam->mode == "istirahat 1") {
                dd("selamat istirahat 1");
            } elseif ($jam->mode == "kembali 1") {
                dd("selamat kembali dari istirahat 1");
            } elseif ($jam->mode == "istirahat 2") {
                dd("selamat istirahat 2");
            } elseif ($jam->mode == "kembali 2") {
                dd("selamat kembali dari istirahat 2");
            } else {
                dd("selamat pulang");
            }
        }

        function create_absent($kondisi)
        {
            global $absen;
            if ($absen) {
            }
            return redirect("/list/absen")->with("success", "account created");
        }
    }
}
