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
        Schema::create('padi', function (Blueprint $table) {
            $table->increments('id_padi');
            $table->string('keunggulan');
            $table->string('jenis_musim');
            $table->text('deskripsi');
            $table->string('varietas');
            $table->string('lama_tanam');
            $table->string('ketahanan_hama_penyakit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('padi');
    }
};
