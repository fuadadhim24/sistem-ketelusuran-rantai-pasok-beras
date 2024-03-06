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
            $table->integer('user_id')->unsigned(); 
            $table->foreign('id_produk')->references('id_produk')->on('produk');
            $table->float('derajat_sosoh');
            $table->float('kadar_air');
            $table->float('beras_kepala');
            $table->float('butir_patah');
            $table->float('butir_menir_merah_kuning_rusak_kapur');
            $table->float('butir_gabah');
            $table->float('benda_lain');
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
