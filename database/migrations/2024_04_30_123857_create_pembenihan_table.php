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
        Schema::create('pembenihan', function (Blueprint $table) {
            $table->id();
            $table->string('sumber_benih');
            $table->dateTime('tanggal_produksi')->nullable;
            $table->dateTime('tanggal_kedaluwarsa')->nullable;
            $table->float('tingkat_kemurnian')->nullable;
            $table->float('tingkat_vigor')->nullable;
            $table->int('jumlah_benih');
            $table->text('daftar_petani');//yang terlibat dalam sekali produksi
            $table->text('qr_code_path');//setelah pengujian input qr code path ke sini
            $table->dateTime('tanggal_tanam')->nullable;
            $table->unsignedBigInteger('id_padi')->nullable();
            $table->foreign('id_padi')->references('id')->on('padi')->onDelete('cascade');
            $table->unsignedBigInteger('id_lahan')->nullable();
            $table->foreign('id_lahan')->references('id')->on('lahan')->onDelete('cascade');
            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembenihan');
    }
};
