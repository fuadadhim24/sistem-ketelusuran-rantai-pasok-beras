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
            $table->id();
            $table->string('qr_code');
            $table->unsignedBigInteger('id_pengujian')->nullable();
            $table->foreign('id_pengujian')->references('id')->on('pengujian')->onDelete('cascade');
            $table->softDeletes();
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
