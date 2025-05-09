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
        Schema::create('detail_transaksi_penitipans', function (Blueprint $table) {
            $table->id('id_detail_penitipan');
            $table->unsignedBigInteger('transaksi_penitipan_id');
            $table->unsignedBigInteger('barang_id');
            $table->integer('jumlah_titipan');
            $table->decimal('subtotal_titipan', 10, 2);
            $table->timestamps();

            $table->foreign('transaksi_penitipan_id')->references('id_transaksi_penitipan')->on('transaksi_penitipan_barangs')->onDelete('cascade');
            $table->foreign('barang_id')->references('id_barang')->on('barangs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_transaksi_penitipans');
    }
};
