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
        Schema::create('buses_tabel', function (Blueprint $table) {
            $table->id(); 
            $table->string('kode', 10);
            $table->string('nama');
            $table->string('tujuan');
            $table->decimal('harga', 10, 2);
            $table->enum('jenis', ['Ekonomi', 'Bisnis', 'Eksekutif']);
            $table->time('jadwal_keberangkatan');
            $table->string('supir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buses_tabel');
    }
};
