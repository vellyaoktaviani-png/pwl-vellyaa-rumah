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
        Schema::create('mata_kuliahs', function (Blueprint $table) {
            $table->id();
            // Menambahkan field untuk Mata Kuliah
            $table->string('kode_mk')->unique(); // Contoh: MK001
            $table->string('nama_mk');           // Contoh: Pemrograman Web Lanjut
            $table->integer('sks');              // Contoh: 3
            $table->timestamps();                // create_at & updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mata_kuliahs');
    }
};
