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
        Schema::create('pengemasan', function (Blueprint $table) {
            $table->increments('id_pengemasan');
            $table->string('qr_code');
            $table->unsignedInteger('id_pengujian')->nullable();
            $table->foreign('id_pengujian')->references('id_pengujian')->on('pengujian')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengemasan');
    }
};
