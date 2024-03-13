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
            $table->increments('id_pengujian');
            $table->unsignedInteger('id_produksi')->nullable(); 
            $table->foreign('id_produksi')->references('id_produksi')->on('produk')->onDelete('cascade');
            $table->float('kadar_air');
            $table->float('benda_asing');
            $table->float('butir_gabah');
            $table->float('beras_kepala');
            $table->float('butir_patah');
            $table->float('butir_menir');
            $table->float('butir_merah');
            $table->float('butir_kuning_rusak');
            $table->float('butir_kapur');
            $table->string('keterangan');
            $table->timestamps('');
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
