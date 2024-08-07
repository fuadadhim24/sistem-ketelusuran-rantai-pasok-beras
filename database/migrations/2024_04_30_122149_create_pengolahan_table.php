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
        Schema::create('pengolahan', function (Blueprint $table) {
            $table->id();
            $table->string('metode');
            $table->string('deskripsi');
            $table->string('lama');//jam
            $table->string('hasil');//kw
            $table->unsignedBigInteger('id_gudang')->nullable();
            $table->foreign('id_gudang')->references('id')->on('gudang')->onDelete('cascade');
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
        Schema::dropIfExists('pengolahan');
    }
};
