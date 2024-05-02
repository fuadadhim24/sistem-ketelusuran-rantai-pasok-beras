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
            $table->float('tingkat_patah');
            $table->float('kadar_Air');
            $table->float('kadar_kerusakan');
            $table->float('benda_asing');
            $table->float('kadar_Kapur');
            $table->float('warna_beras');
            $table->float('bau_rasa');
            $table->string('keterangan');
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
