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
        Schema::create('komisis', function (Blueprint $table) {
            $table->id('id_komisi');
            $table->unsignedBigInteger('transaksi_penjualan_id');
            $table->unsignedBigInteger('penitip_id');
            $table->unsignedBigInteger('pegawai_id');
            $table->enum('jenis_komisi', ['-', 'Hunter', 'ReUseMart'])->default('-');
            $table->decimal('jumlah_komisi', 10, 2)->default(0);
            $table->timestamps();

            $table->foreign('transaksi_penjualan_id')->references('id_transaksi_penjualan')->on('transaksi_penjualan_barangs')->onDelete('cascade');
            $table->foreign('penitip_id')->references('id_penitip')->on('penitips')->onDelete('cascade');
            $table->foreign('pegawai_id')->references('id_pegawai')->on('pegawais')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komisis');
    }
};
