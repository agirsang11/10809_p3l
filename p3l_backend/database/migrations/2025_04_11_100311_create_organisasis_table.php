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
        Schema::create('organisasis', function (Blueprint $table) {
            $table->id('id_organisasi');
            $table->string('nama_organisasi', 100);
            $table->string('email_organisasi')->unique();
            $table->string('username_organisasi')->unique();
            $table->string('password_organisasi');
            $table->string('alamat_organisasi');
            $table->string('no_telp_organisasi');
            $table->date('tanggal_bergabung_organisasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organisasis');
    }
};
