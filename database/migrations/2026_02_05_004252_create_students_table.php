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
    Schema::create('students', function (Blueprint $table) {
        $table->id();
        $table->integer('nis')->unique(); // Login pakai NIS
        $table->string('nama', 50); // Tambahan agar lebih jelas
        $table->string('kelas', 10);
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
