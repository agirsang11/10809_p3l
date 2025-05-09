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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id('id_pegawai');
            $table->unsignedBigInteger('jabatan_id');
            $table->string('nama_pegawai', 100);
            $table->string('email_pegawai')->unique();
            $table->string('username_pegawai')->unique();
            $table->string('password_pegawai');
            $table->string('no_telp_pegawai', 15)->unique();
            $table->date('tanggal_bergabung_pegawai');
            $table->timestamps();

            $table->foreign('jabatan_id')->references('id_jabatan')->on('jabatans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};
