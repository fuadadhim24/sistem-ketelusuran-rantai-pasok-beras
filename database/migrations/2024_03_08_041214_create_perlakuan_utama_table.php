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
        Schema::create('perlakuan_utama', function (Blueprint $table) {
            $table->increments('id_perlakuan');
            $table->string('nama_perlakuan_utama');
            $table->smallInteger('hari');
            $table->smallInteger('durasi');
            $table->unsignedInteger('id_fase');
            $table->foreign('id_fase')->references('id_fase')->on('fase')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perlakuan_utama');
    }
};
