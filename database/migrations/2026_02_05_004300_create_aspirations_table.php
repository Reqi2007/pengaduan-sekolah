<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
    Schema::create('aspirations', function (Blueprint $table) {
        $table->id('id_aspirasi');
        $table->integer('id_pelaporan')->nullable(); // Sesuai ERD
        $table->integer('nis'); // Relasi ke siswa manual
        $table->unsignedBigInteger('id_kategori');
        $table->string('lokasi', 50);
        $table->text('ket'); // Keterangan aspirasi
        $table->enum('status', ['Menunggu', 'Proses', 'Selesai'])->default('Menunggu');
        $table->text('feedback')->nullable(); // Umpan balik admin
        $table->timestamps();

        // Foreign key (Best Practice)
        $table->foreign('id_kategori')->references('id_kategori')->on('categories');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aspirations');
    }
};
