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
        Schema::create('transaksi_pemberian_donasis', function (Blueprint $table) {
            $table->id('id_transaksi_donasi');
            $table->unsignedBigInteger('request_donasi_id');
            $table->dateTime('tanggal_donasi');
            $table->enum('status_donasi', ['Menunggu Persetujuan', 'Sudah Didonasikan'])->default('Menunggu Persetujuan');
            $table->string('keterangan');
            $table->timestamps();

            $table->foreign('request_donasi_id')->references('id_request_donasi')->on('request_donasis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_pemberian_donasis');
    }
};
