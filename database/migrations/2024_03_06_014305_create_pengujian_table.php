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
        Schema::create('pengujian', function (Blueprint $table) {
            $table->id();
            $table->foreign('id_produk')->references('id_produk')->on('produk');
            $table->float('derajat_sosoh');
            $table->float('kadar_air');
            $table->float('beras_kepala');
            $table->float('beras_patah');
            $table->float('butir_menir');
            $table->float('butir_merah');
            $table->float('butir_kuning');
            $table->float('benda_asing');
            $table->float('butir_gabah');
            $table->float('kadaluarsa');
            $table->float('kandungan_nutrisi');
            $table->float('penyakit_hama');
            $table->float('bau');
            $table->float('dedak_bekatul');
            $table->float('kadmium');
            $table->float('timbal');
            $table->string('keterangan');
            $table->timestamps('tanggal_uji');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengujian');
    }
};
