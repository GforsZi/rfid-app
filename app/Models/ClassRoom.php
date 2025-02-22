<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Siswa;

class ClassRoom extends Model
{
    /** @use HasFactory<\Database\Factories\ClassRoomFactory> */
    use HasFactory;

    protected $guarded = ["id", "timestamps"];

    protected $dates = ['deleted_at'];

    public function siswa(): HasMany
    {
        return $this->hasMany(Siswa::class);
    }

    public function delete()
    {
        // Hapus semua posts & comments terkait sebelum menghapus user
        $this->siswa()->each(function ($siswa) {
            $siswa->delete();
        });

        return parent::delete();
    }
}
