<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VarietasPadi extends Model
{
    use HasFactory;

    protected $table = 'padi';

    protected $fillable = [
        'id',
        'varietas',
        'deskripsi',
        'keunggulan',
        'jenis_musim',
        'lama_tanam',
        'ketahanan_hama_penyakit',
        'deleted_at',
        'created_at',
        'updated_at'
    ];
}
