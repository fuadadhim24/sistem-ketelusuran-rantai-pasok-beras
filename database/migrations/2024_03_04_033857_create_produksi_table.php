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
        Schema::create('produksi', function (Blueprint $table) {
            $table->id();
            $table->string('sumber_benih');
            $table->dateTime('tanggal_produksi')->nullable();
            $table->dateTime('tanggal_kedaluwarsa')->nullable();
            $table->integer('tingkat_kemurnian')->nullable();
            $table->integer('tingkat_vigor')->nullable();
            $table->integer('jumlah_benih')->nullable();
            $table->text('daftar_petani')->nullable();
            $table->text('qr_code_path')->nullable();
            $table->dateTime('tanggal_penyemaian')->nullable();
            $table->dateTime('tanggal_penanaman')->nullable();
            $table->unsignedBigInteger('id_padi')->nullable();
            $table->foreign('id_padi')->references('id')->on('padi')->onDelete('cascade');
            $table->unsignedBigInteger('id_lahan')->nullable();
            $table->foreign('id_lahan')->references('id')->on('lahan')->onDelete('cascade');
            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produksi');
    }
};
