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
        Schema::create('class_rooms', function (Blueprint $table) {
            $table->id();
            $table->enum("kelas", ["10", "11", "12"]);
            $table->enum("jurusan", ["Pengembangan Prangkat lunak dan Gim", "Desain Komunikasi Visual"]);
            $table->integer("kelas_ke")->nullable();
            $table->string("lokasi");
            $table->integer("angkatan");
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_rooms');
    }
};
