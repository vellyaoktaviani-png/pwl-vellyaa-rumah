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
        // Membuat tabel bernama table_mahasiswa [cite: 134]
        // Membuat tabel bernama table_mahasiswa
        Schema::create('table_mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('Fullname');
            $table->string('NIM')->unique();
            $table->string('Tempat_Lahir');
            $table->date('Tanggal_Lahir');
            $table->text('Alamat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_mahasiswa');
    }
};
