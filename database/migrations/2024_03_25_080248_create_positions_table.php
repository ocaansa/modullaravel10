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
        Schema::create('positions', function (Blueprint $table) {
            $table->id();                   // Kolom untuk ID  (akan menjadi primary key)
            $table->string('code');          // Kolom untuk kode position
            $table->string('name');          // Kolom untuk nama position
            $table->string('description');   // Kolom untuk deskripsi position
            $table->timestamps();            // Kolom untuk waktu dan update
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('positions');
    }
};
