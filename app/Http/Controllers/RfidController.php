<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Absent;
use App\Models\tmp_rfid;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class RfidController
{
    public function tmp_rfid(Request $request)
    {
        tmp_rfid::query()->delete();

        $validateRFID = $request->toArray();

        $data = [
            "tmp_rfid" => $validateRFID["rfid"],
        ];

        $data_rfid = Siswa::where("rfid", $validateRFID["rfid"])->first();
        if ($data_rfid == null) {
            tmp_rfid::create($data);

            return response()->json([
                'message' => 'RFID diterima',
                'data' => $validateRFID["rfid"],
            ], 201);
            exit;
        } else {
            function create_absent($id, $jadwal)
            {
                $data = [
                    "siswa_id" => $id,
                    "tanggal" => date("y-m-d"),
                    $jadwal => date("H:i"),
                ];
                $date = date("y-m-d");
                $absen = Absent::where("id", $id)->where("tanggal", $date)->get()->count();
                if ($absen <= 0) {
                    Absent::create($data);
                    return redirect("/list/absen")->with("success", "Absent created");
                } else {
                    Absent::where("id", $id)->where("tanggal", $date)->update($data);
                    return redirect("/list/absen")->with("success", "Absent created");
                }
            }

            // SQLITE
            $jadwal = DB::table("schedules")->selectRaw("mode, strftime(jam_masuk) as jam_masuk, strftime(jam_istirahat_1) as jam_istirahat_1, strftime(jam_kembali_1) as jam_kembali_1, strftime(jam_istirahat_2) as jam_istirahat_2, strftime(jam_kembali_2) as jam_kembali_2, strftime(jam_pulang) as jam_pulang")->get()->toArray();

            // MYSQL
            // $jadwal = DB::table("schedules")->selectRaw("HOUR(jam_masuk) as jam_masuk, HOUR(jam_istirahat_1) as jam_istirhat_1, HOUR(jam_kembali_1) as jam_kembali_1, HOUR(jam_istirahat_2) as jam_istirahat_2, HOUR(jam_kembali_2) as jam_kembali_2, HOUR(jam_pulang) as jam_pulang")->get()->toArray();
            if ($jadwal === []) {
                header("location: /setting/jadwal/add");
                exit;
            }
            $jam = $jadwal[0];

            $jam_masuk_Formatted = Carbon::createFromFormat('H:i', $jam->jam_masuk)->format('H');
            $jam_istirahat_1_Formatted = Carbon::createFromFormat('H:i', $jam->jam_istirahat_1)->format('H');
            $jam_kembali_1_Formatted = Carbon::createFromFormat('H:i', $jam->jam_kembali_1)->format('H');
            $jam_istirahat_2_Formatted = Carbon::createFromFormat('H:i', $jam->jam_istirahat_2)->format('H');
            $jam_kembali_2_Formatted = Carbon::createFromFormat('H:i', $jam->jam_kembali_2)->format('H');
            $jam_pulang_Formatted = Carbon::createFromFormat('H:i', $jam->jam_pulang)->format('H');

            $saat_ini = Carbon::now()->format("H");

            $validateRFID = $request->validate([
                "rfid" => "required | exists:siswas,rfid",
            ]);

            $siswa = Siswa::with("class_room")->where("rfid", $validateRFID["rfid"])->get()->toArray();
            $siswa_id = $siswa[0]["id"];

            if ($jam->mode == "otomatis") {
                if ($saat_ini >= $jam_masuk_Formatted && $saat_ini < $jam_istirahat_1_Formatted) {
                    create_absent($siswa_id, "masuk");
                    tmp_rfid::query()->delete();
                } elseif ($saat_ini >= $jam_istirahat_1_Formatted && $saat_ini < $jam_kembali_1_Formatted) {
                    create_absent($siswa_id, "istirahat_1");
                    tmp_rfid::query()->delete();
                } elseif ($saat_ini >= $jam_kembali_1_Formatted && $saat_ini < $jam_istirahat_2_Formatted) {
                    create_absent($siswa_id, "kembali_1");
                    tmp_rfid::query()->delete();
                } elseif ($saat_ini >= $jam_istirahat_2_Formatted && $saat_ini < $jam_kembali_2_Formatted) {
                    create_absent($siswa_id, "istirahat_2");
                    tmp_rfid::query()->delete();
                } elseif ($saat_ini >= $jam_kembali_2_Formatted && $saat_ini < $jam_pulang_Formatted) {
                    create_absent($siswa_id, "kembali_2");
                    tmp_rfid::query()->delete();
                } else {
                    create_absent($siswa_id, "pulang");
                    tmp_rfid::query()->delete();
                }
            } else {
                create_absent($siswa_id, $jam->mode);
                tmp_rfid::query()->delete();
            }

            return response()->json([
                'message' => 'RFID diterima',
                'data' => $validateRFID["rfid"]
            ], 201);

            exit;
        }
    }
}
