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
        Schema::create('penitips', function (Blueprint $table) {
            $table->id('id_penitip');
            $table->string('nama_penitip');
            $table->string('email_penitip')->unique();
            $table->string('username_penitip')->unique();
            $table->string('password_penitip');
            $table->string('nik_penitip', 14)->unique();
            $table->date('tanggal_lahir_penitip');
            $table->string('alamat_penitip');
            $table->string('no_telp_penitip');
            $table->date('tanggal_bergabung_penitip');
            $table->decimal('saldo_penitip', 10, 2)->default(0);
            $table->integer('poin_penitip')->default(0);
            $table->integer('total_penjualan_penitip')->default(0);
            $table->string('badge_penitip')->default('badge-default');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penitips');
    }
};
