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
        Schema::create('transaksi_penjualan_barangs', function (Blueprint $table) {
            $table->id('id_transaksi_penjualan');
            $table->unsignedBigInteger('pembeli_id');
            $table->dateTime('tanggal_pesan');
            $table->dateTime('tanggal_lunas')->nullable();
            $table->date('tanggal_kirim')->nullable();
            $table->dateTime('tanggal_ambil')->nullable();
            $table->decimal('total_biaya', 10, 2);
            $table->integer('poin_digunakan')->default(0);
            $table->decimal('potongan_poin', 10, 2)->default(0);
            $table->decimal('ongkos_kirim', 10, 2)->default(0);
            $table->enum('status_delivery', ['Barang Dikirim', 'Barang Sudah Sampai', 'Sudah Diambil'])->default('Barang Dikirim');
            $table->enum('delivery', ['-', 'Kurir ReUseMart'])->default('-');
            $table->string('no_nota_pembelian', 50)->unique();
            $table->timestamps();

            $table->foreign('pembeli_id')->references('id_pembeli')->on('pembelis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_penjualan_barangs');
    }
};
