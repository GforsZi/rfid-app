<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->enum("mode", ["otomatis", "masuk", "istirahat_1", "kembali_1", "istirahat_2", "kembali_2", "pulang"])->default("otomatis");
            $table->time("jam_masuk")->default("00:00:00");
            $table->time("jam_istirahat_1")->default("00:00:00");
            $table->time("jam_kembali_1")->default("00:00:00");
            $table->time("jam_istirahat_2")->default("00:00:00");
            $table->time("jam_kembali_2")->default("00:00:00");
            $table->time("jam_pulang")->default("00:00:00");
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
