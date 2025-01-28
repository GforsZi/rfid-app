<?php

namespace App\Http\Controllers;

use App\Models\Absent;
use App\Models\Siswa;
use Illuminate\Http\Request;

class AbsentController
{
    public function store(Request $request)
    {
        $time = date("H:i:s");
        $date = date("y-m-d");
        $validateData = $request->validate([
            "rfid" => "required | exists:siswas,rfid",
        ]);

        Absent::create($validateData);
        return redirect("/list/siswa")->with("success", "account created");
    }
}
