<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produksi extends Model
{
    use HasFactory;

    protected $table='produksi';

    protected $fillable = [
        'id',
        'sumber_benih',
        'tanggal_produksi',
        'tanggal_kedaluwarsa',
        'tingkat_kemurnian',
        'tingkat_vigor',
        'jumlah_benih',
        'daftar_petani',
        'qr_code_path',
        'tanggal_tanam',
        'id_padi',
        'id_lahan',
        'id_user',
        'created_at',
        'updated_at',

    ];

    public function produk(){
        return $this->hasMany(Produk::class,'id_produksi','id');
    }

}