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
        Schema::create('request_donasis', function (Blueprint $table) {
            $table->id('id_request_donasi');
            $table->unsignedBigInteger('organisasi_id');
            $table->string('detail_request');
            $table->dateTime('tanggal_request');
            $table->enum('status_donasi', ['-', 'Diajukan', 'Disetujui'])->default('-');
            $table->string('nama_penerima', 100);
            $table->timestamps();

            $table->foreign('organisasi_id')->references('id_organisasi')->on('organisasis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_donasis');
    }
};
