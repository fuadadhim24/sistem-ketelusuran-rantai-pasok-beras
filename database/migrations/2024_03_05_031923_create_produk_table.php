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
        Schema::create('produk', function (Blueprint $table){
            $table->id();
            $table->string('nama_produk');
            $table->string('kode_produk');
            $table->string('jumlah_unit');
            $table->string('foto');
            $table->string('harga');
            $table->text('deskripsi');
            $table->unsignedBigInteger('id_produksi')->nullable();
            $table->softDeletes();
            $table->foreign('id_produksi')->references('id')->on('produksi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
