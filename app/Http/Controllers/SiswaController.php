<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController
{
    public function store(Request $request)
    {
        if ($request["password"] !== $request["confirm_password"]) {
            return redirect("/list/siswa/add");
            exit();
        }
        $validateData = $request->validate([
            "name" => "required | min:3 | max:255",
            "nisn" => "required | unique:siswas,nisn",
            "rfid" => "required | unique:siswas,rfid",
            "kelas" => "required | min:2 | max:2",
            "jurusan" => "required | min:5 | max:50",
        ]);

        Siswa::create($validateData);
        return redirect("/list/siswa")->with("success", "account created");
    }

    public function tmp_rfid(Request $request)
    {
        $validateRFID = $request->validate([
            "rfid" => "required | min:10 | max:20",
        ]);

        return redirect("/list/siswa/add")->with("rfid", $validateRFID["rfid"]);
    }

    public function delete($nisn)
    {

        $siswa = Siswa::where("nisn", $nisn)->first();

        if (!$siswa) {
            return redirect("/list/siswa")->with(
                "error",
                "data not found"
            );
        }

        $siswa->delete();

        if ($siswa) {
            return redirect("/list/siswa")->with(
                "success",
                "data has been deleted"
            );
        } else {
            return redirect("/list/siswa")->with(
                "error",
                "data has been not deleted"
            );
        }
    }

    public function update(Request $request, $nisn)
    {
        $siswa = Siswa::where("nisn", $nisn)->first();

        if ($request["nisn"] == $siswa->nisn) {
            $siswa->nisn = "000";
            $siswa->save();
        }

        $validatedData = $request->validate([
            "name" => "required | min:3 | max:255",
            "nisn" => "required | unique:siswas,nisn",
            "kelas" => "required | min:2 | max:2",
            "jurusan" => "required | min:5 | max:50",
        ]);

        if (!$validatedData) {
            $siswa->nisn = $nisn;
            $siswa->save();
        }

        if (!$siswa) {
            return redirect("/list/siswa")->with(
                "error",
                "data not found"
            );
        }

        $siswa->update($validatedData);

        return redirect("/list/siswa")->with(
            "success",
            "data has been deleted"
        );
    }
}
