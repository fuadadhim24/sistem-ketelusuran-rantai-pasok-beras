<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PadiModel extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'padi';

    protected $fillable = [
        'varietas',
        'kategori',
        'deskripsi',
        'karakteristik_hasil',
        'keunggulan',
        'jenis_musim',
        'lama_tanam',
        'ketahanan_hama_penyakit',
    ];

    public function produksi()
    {
        return $this->hasMany(ProduksiModel::class, 'id_padi');
    }
}
