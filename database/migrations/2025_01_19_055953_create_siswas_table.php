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
                ->foreignId("class_room_id")
                ->constrained(table: "class_rooms", indexName: "classroom_id_1")->onUpdate('cascade')
                ->onDelete('cascade');
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
