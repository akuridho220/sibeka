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
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->string('nim_konseli');
            $table->string('nama_konseli');
            $table->string('prodi_konseli');
            $table->integer('tingkat_konseli');
            $table->string('jk_konseli');
            $table->string('nama_konselor');
            $table->date('hari');
            $table->string('waktu');
            $table->string('topik');
            $table->string('hasil');
            $table->string('solusi');
            $table->integer('user_id');
            $table->integer('pengjuan_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporans');
    }
};