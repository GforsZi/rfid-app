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
}
