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
            $table->id();
            $table->string('varietas');
            $table->string('kategori');
            $table->text('deskripsi');
            $table->string('karakteristik_hasil');
            $table->string('keunggulan');
            $table->string('jenis_musim');
            $table->string('lama_tanam');
            $table->string('ketahanan_hama_penyakit');
            $table->softDeletes();
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
