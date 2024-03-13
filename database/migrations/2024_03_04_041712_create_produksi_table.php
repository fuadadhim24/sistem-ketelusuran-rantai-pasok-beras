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
            $table->increments('id_produksi');
            $table->integer('quantity');
            $table->string('status');
            $table->time('tanggal_panen');
            $table->unsignedInteger('id_fase')->nullable();
            $table->foreign('id_fase')->references('id_fase')->on('fase')->onDelete('cascade');
            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedInteger('id_lahan')->nullable();
            $table->foreign('id_lahan')->references('id_lahan')->on('lahan')->onDelete('cascade');
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