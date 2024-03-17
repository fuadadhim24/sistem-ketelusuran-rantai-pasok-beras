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
        Schema::create('perlakuan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_masalah');
            $table->string('solusi');
            $table->text('detail_solusi');
            $table->string('path_foto_masalah');
            $table->string('path_foto_solusi');
            $table->smallInteger('hari');
            $table->smallInteger('durasi');
            $table->unsignedBigInteger('id_fase');
            $table->foreign('id_fase')->references('id_fase')->on('fase')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perlakuan');
    }
};
