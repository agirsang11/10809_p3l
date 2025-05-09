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
        Schema::create('penukaran_merchandises', function (Blueprint $table) {
            $table->id('id_penukaran_merchandise');
            $table->unsignedBigInteger('merchandise_id');
            $table->unsignedBigInteger('pembeli_id');
            $table->date('tanggal_penukaran');
            $table->integer('jumlah_merchandise');
            $table->enum('status_penukaran', ['-', 'Berhasil', 'Gagal'])->default('-');
            $table->timestamps();

            $table->foreign('merchandise_id')->references('id_merchandise')->on('merchandises')->onDelete('cascade');
            $table->foreign('pembeli_id')->references('id_pembeli')->on('pembelis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penukaran_merchandises');
    }
};
