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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId("classroom_id")
                ->constrained(table: "class_rooms", indexName: "belongsto_classroom_id");
            $table->string('name');
            $table->string('nisn')->unique();
            $table->string('rfid')->unique();
            $table
                ->string("foto")
                ->nullable()
                ->default("siswa.jpg");
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
