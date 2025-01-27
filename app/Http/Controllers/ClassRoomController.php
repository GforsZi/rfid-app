<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use Illuminate\Http\Request;

class ClassRoomController
{
    public function store(Request $request)
    {
        $validateData = $request->validate([
            "kelas" => "required | min:2 | max:2",
            "jurusan" => "required | min:5 | max:50",
            "kelas_ke" => "max:1",
            "lokasi" => "required | min:10 | max:255",
            "angkatan" => "required | min:1 | max:1",

        ]);

        ClassRoom::create($validateData);
        return redirect("/list/kelas")->with("success", "class room created");
    }

    public function delete($angkatan)
    {

        $kelas = ClassRoom::where("angkatan", $angkatan)->get();

        if (!$kelas) {
            return redirect("/list/kelas")->with(
                "error",
                "data not found"
            );
        }

        $kelas->delete();

        if ($kelas) {
            return redirect("/list/kelas")->with(
                "success",
                "data has been deleted"
            );
        } else {
            return redirect("/list/kelas")->with(
                "error",
                "data has been not deleted"
            );
        }
    }

    public function update(Request $request, $id)
    {
        $kelas = ClassRoom::where("id", $id)->first();

        $validatedData = $request->validate([
            "kelas" => "required | min:2 | max:2",
            "jurusan" => "required | min:5 | max:50",
            "kelas_ke" => "max:1",
            "lokasi" => "required | min:10 | max:255",
            "angkatan" => "required | min:1 | max:1",
        ]);

        if (!$kelas) {
            return redirect("/list/kelas")->with(
                "error",
                "data not found"
            );
        }

        $kelas->update($validatedData);

        return redirect("/list/kelas")->with(
            "success",
            "data has been updated"
        );
    }
}
