<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Siswa;

class Absent extends Model
{
    /** @use HasFactory<\Database\Factories\AbsentFactory> */
    use HasFactory;

    protected $guarded = ["id", "timestamps"];

    protected $dates = ['deleted_at'];

    public function siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class);
    }
}
