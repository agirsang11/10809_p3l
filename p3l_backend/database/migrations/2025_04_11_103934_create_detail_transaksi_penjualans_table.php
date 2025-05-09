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
        Schema::create('detail_transaksi_penjualans', function (Blueprint $table) {
            $table->id('id_detail_penjualan');
            $table->unsignedBigInteger('barang_id');
            $table->unsignedBigInteger('transaksi_penjualan_id');
            $table->decimal('subtotal', 10, 2);
            $table->timestamps();

            $table->foreign('barang_id')->references('id_barang')->on('barangs')->onDelete('cascade');
            $table->foreign('transaksi_penjualan_id')->references('id_transaksi_penjualan')->on('transaksi_penjualan_barangs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_transaksi_penjualans');
    }
};
