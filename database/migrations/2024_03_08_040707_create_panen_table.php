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
        Schema::create('panen', function (Blueprint $table) {
            $table->increments('id_panen');
            $table->float('quantity');
            $table->string('status');
            $table->timestamps();
            $table->unsignedInteger('id_gudang');
            $table->foreign('id_gudang')->references('id_gudang')->on('gudang')->onDelete('cascade');
            $table->unsignedInteger('id_padi');
            $table->foreign('id_padi')->references('id_padi')->on('padi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('panen');
    }
};
