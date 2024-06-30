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
            $table->float('derajat_sosoh');
            $table->float('kadar_Air');
            $table->float('beras_kepala');
            $table->float('butir_patah');
            $table->float('butir_menir_dsb');
            $table->float('butir_gabah');
            $table->float('butir_lain');
            $table->string('keterangan');
            $table->string('hasil_pengujian');
            $table->unsignedBigInteger('id_produksi')->nullable();
            $table->foreign('id_produksi')->references('id')->on('produksi')->onDelete('cascade');
            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
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
