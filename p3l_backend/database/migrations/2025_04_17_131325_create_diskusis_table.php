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
        Schema::create('diskusis', function (Blueprint $table) {
            $table->id('id_diskusi');
            $table->unsignedBigInteger('barang_id');
            $table->unsignedBigInteger('pembeli_id');
            $table->string('isi_diskusi');
            $table->date('tanggal_diskusi');
            $table->timestamps();

            $table->foreign('barang_id')->references('id_barang')->on('barangs')->onDelete('cascade');
            $table->foreign('pembeli_id')->references('id_pembeli')->on('pembelis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diskusis');
    }
};
