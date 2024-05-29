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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();                                   // Kolom untuk ID  (id sebagai primary key)
            $table->string('firstname');                     // Kolom untuk nama depan
            $table->string('lastname')->nullable();           // Kolom untuk nama belakang, karena ada nullable artinya boleh kosong
            $table->string('email')->unique();                 // Kolom untuk email ( harus menggunakan karaktr unik)
            $table->integer('age');                            // Kolom untuk usia (mengggunkan bilangan bulat)
            $table->foreignId('position_id')->constrained();  // Kolom ID posisi (menjadi foreign key)
            $table->timestamps();                             // Kolom waktu dan update otomatis
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
