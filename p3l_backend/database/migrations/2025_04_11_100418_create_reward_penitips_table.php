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
        Schema::create('reward_penitips', function (Blueprint $table) {
            $table->id('id_reward');
            $table->unsignedBigInteger('penitip_id');
            $table->string('jenis_reward', 100);
            $table->date('tanggal_reward');
            $table->decimal('jumlah_bonus_rupiah', 10, 2);
            $table->integer('jumlah_bonus_koin')->default(0);
            $table->timestamps();

            $table->foreign('penitip_id')->references('id_penitip')->on('penitips')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reward_penitips');
    }
};
