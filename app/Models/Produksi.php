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
    public function varietasPadi(){
        return $this->belongsTo(VarietasPadi::class,'id_padi', 'id');
    }
    public function lahan(){
        return $this->belongsTo(Lahan::class,'id_lahan', 'id');
    }
    public function panen(){
        return $this->hasMany(Panen::class,'id_produksi','id');
    }
    public function perawatan(){
        return $this->hasMany(Perawatan::class,'id_produksi','id');
    }
    public function pengujian(){
        return $this->hasMany(Pengujian::class,'id_produksi','id');
    }
    public function pengolahan(){
        return $this->hasMany(Pengolahan::class,'id_produksi','id');
    }

}
