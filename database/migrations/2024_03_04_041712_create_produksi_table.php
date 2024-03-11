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
            $table->string('kode_produksi');
            $table->integer('quantity');
            $table->string('status');
            $table->unsignedInteger('id_gudang');
            $table->foreign('id_gudang')->references('id_gudang')->on('gudang')->onDelete('cascade');
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
