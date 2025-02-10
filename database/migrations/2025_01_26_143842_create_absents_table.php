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
                ->constrained(table: "siswas", indexName: "siswa_id_2")->onUpdate('cascade')->onDelete('cascade');
            $table->date("tanggal");
            $table->time("masuk")->default("00:00");
            $table->time("istirahat_1")->default("00:00");
            $table->time("kembali_1")->default("00:00");
            $table->time("istirahat_2")->default("00:00");
            $table->time("kembali_2")->default("00:00");
            $table->time("pulang")->default("00:00");
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
