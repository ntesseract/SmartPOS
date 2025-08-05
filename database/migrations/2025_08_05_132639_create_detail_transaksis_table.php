<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('detail_transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_transaksi')->constrained('transaksis')->onDelete('cascade');
            $table->foreignId('id_barang')->constrained('barangs')->onDelete('restrict');
            $table->integer('harga');
            $table->integer('jumlah');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('detail_transaksis');
    }
};
