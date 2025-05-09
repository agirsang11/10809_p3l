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
        Schema::create('barangs', function (Blueprint $table) {
            $table->id('id_barang');
            $table->unsignedBigInteger('pegawai_id');
            $table->unsignedBigInteger('kategori_barang_id');
            $table->string('nama_barang', 100);
            $table->string('detail_barang');
            $table->enum('status_barang', ['Sedang Disiapkan', 'Sedang Diantar', 'Sudah Sampai'])->default('Sedang Disiapkan');
            $table->decimal('harga_barang', 10, 2);
            $table->integer('stok_barang');
            $table->string('garansi_berlaku', 64)->nullable();
            $table->string('kode_barang', 20)->unique();
            $table->integer('rating_barang')->default(0);
            $table->decimal('berat_barang', 8, 2)->default(0);
            $table->timestamps();

            $table->foreign('pegawai_id')->references('id_pegawai')->on('pegawais')->onDelete('cascade');
            $table->foreign('kategori_barang_id')->references('id_kategori_barang')->on('kategori_barangs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
