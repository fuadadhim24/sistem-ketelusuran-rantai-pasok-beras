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
        Schema::create('tanam_lahan', function (Blueprint $table) {
            $table->increments('id_tanam_lahan');
            $table->unsignedInteger('id_padi');
            $table->foreign('id_padi')->references('id_padi')->on('padi')->onDelete('cascade');
            $table->unsignedInteger('id_lahan');
            $table->foreign('id_lahan')->references('id_lahan')->on('lahan')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tanam_lahan');
    }
};
