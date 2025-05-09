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
        Schema::create('menjawab_diskusis', function (Blueprint $table) {
            $table->id('id_menjawab_diskusi');
            $table->unsignedBigInteger('diskusi_id');
            $table->unsignedBigInteger('pegawai_id');
            $table->string('isi_jawaban');
            $table->date('tanggal_menjawab');
            $table->timestamps();

            $table->foreign('diskusi_id')->references('id_diskusi')->on('diskusis')->onDelete('cascade');
            $table->foreign('pegawai_id')->references('id_pegawai')->on('pegawais')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menjawab_diskusis');
    }
};
