<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Absent;
use App\Models\ClassRoom;

class Siswa extends Model
{
    /** @use HasFactory<\Database\Factories\SiswaFactory> */
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ["id", "timestamps"];

    protected $dates = ['deleted_at'];

    protected $with = ["class_room"];

    public function absent(): HasMany
    {
        return $this->hasMany(Absent::class);
    }

    public function class_room(): BelongsTo
    {
        return $this->belongsTo(ClassRoom::class);
    }

    public function delete()
    {
        $this->absent()->delete();
        return parent::delete();
    }
}
