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
        Schema::create('absents', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId("siswa_id")
                ->constrained(table: "siswas", indexName: "belongsto_siswa_id");
            $table->date("tanggal");
            $table->time("masuk")->default("00:00:00");
            $table->time("istirahat")->default("00:00:00");
            $table->time("kembali")->default("00:00:00");
            $table->time("pulang")->default("00:00:00");
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absents');
    }
};
