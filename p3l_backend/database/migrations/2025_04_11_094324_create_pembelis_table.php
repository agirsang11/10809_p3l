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
        Schema::create('pembelis', function (Blueprint $table) {
            $table->id('id_pembeli');
            $table->string('nama_pembeli');
            $table->string('email_pembeli')->unique();
            $table->string('username_pembeli')->unique();
            $table->string('password_pembeli');
            $table->string('no_telp_pembeli');
            $table->date('tanggal_daftar_pembeli');
            $table->integer('poin_pembeli')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelis');
    }
};
