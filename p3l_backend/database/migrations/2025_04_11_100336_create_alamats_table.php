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
        Schema::create('alamats', function (Blueprint $table) {
            $table->id('id_alamat');
            $table->unsignedBigInteger('pembeli_id');
            $table->string('nama_alamat', 100);
            $table->string('alamat_lengkap');
            $table->timestamps();

            $table->foreign('pembeli_id')->references('id_pembeli')->on('pembelis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alamats');
    }
};
