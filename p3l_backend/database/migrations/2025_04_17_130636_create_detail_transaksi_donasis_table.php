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
        Schema::create('detail_transaksi_donasis', function (Blueprint $table) {
            $table->id('id_detail_donasi');
            $table->unsignedBigInteger('transaksi_donasi_id');
            $table->unsignedBigInteger('barang_id');
            $table->integer('jumlah_donasi');
            $table->timestamps();

            $table->foreign('transaksi_donasi_id')->references('id_transaksi_donasi')->on('transaksi_pemberian_donasis')->onDelete('cascade');
            $table->foreign('barang_id')->references('id_barang')->on('barangs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_transaksi_donasis');
    }
};
