<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tmp_rfid extends Model
{
    /** @use HasFactory<\Database\Factories\TmpRfidFactory> */
    use HasFactory;

    protected $guarded = ["id", "timestamps"];
}
