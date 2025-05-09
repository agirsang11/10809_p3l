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
        Schema::create('transaksi_penitipan_barangs', function (Blueprint $table) {
            $table->id('id_transaksi_penitipan');
            $table->unsignedBigInteger('penitip_id');
            $table->dateTime('tanggal_penitipan');
            $table->dateTime('tanggal_selesai_penitipan')->nullable();
            $table->enum('status_penitipan', ['Dititipkan', 'Diperpanjang', 'Didonasikan', 'Diambil'])->default('Dititipkan');
            $table->dateTime('batas_ambil')->nullable();
            $table->string('no_nota_penitipan', 50)->unique();
            $table->timestamps();

            $table->foreign('penitip_id')->references('id_penitip')->on('penitips')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_penitipan_barangs');
    }
};
