<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tanggal');
            $table->integer('total_barang');
            $table->integer('total_harga');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('transaksis');
    }
};
