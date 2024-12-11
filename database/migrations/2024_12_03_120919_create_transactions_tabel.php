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
        Schema::create('transactions_tabel', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('bus_id'); 
            $table->unsignedBigInteger('customer_id'); 
            $table->integer('jumlah_tiket'); 
            $table->decimal('total', 10, 2); 
            $table->date('tanggal_transaksi'); 
            $table->timestamps(); 

            // Relasi tabel
            $table->foreign('bus_id')->references('id')->on('buses_tabel')->onDelete('cascade'); 
            $table->foreign('customer_id')->references('id')->on('customers_tabel')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions_tabel');
    }
};
