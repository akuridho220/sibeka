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
        Schema::create('pengajuans', function (Blueprint $table) {
            $table->id();
            $table->string('nim_konseli');
            $table->string('nama_konseli');
            $table->string('prodi_konseli');
            $table->integer('tingkat_konseli');
            $table->string('jk_konseli');
            $table->string('nama_konselor')->nullable();
            $table->string('jk_konselor')->nullable();
            $table->date('hari_1');
            $table->date('hari_2')->nullable();
            $table->string('waktu_1');
            $table->string('waktu_2')->nullable();
            $table->string('ruang')->nullable();
            $table->string('status');
            $table->integer('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuans');
    }
};
