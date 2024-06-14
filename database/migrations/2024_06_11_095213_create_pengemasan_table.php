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
            $table->string('jenis_kemasan');
            $table->float('berat_kemasan');
            $table->float('jumlah_kemasan');
            $table->text('qr_code');
            $table->unsignedBigInteger('id_pengolahan')->nullable();
            $table->foreign('id_pengolahan')->references('id')->on('pengolahan')->onDelete('cascade');
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
