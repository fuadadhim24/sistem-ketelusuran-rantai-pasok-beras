<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengujian extends Model
{
    use HasFactory;
    protected $table='pengujian';
    protected $fillable = [
        'id',
        'tingkat_patah',
        'kadar_Air',
        'kadar_kerusakan',
        'benda_asing',
        'kadar_kapur',
        'warna_beras',
        'bau_rasa',
        'keterangan',
        'id_produksi',
        'id_user',
        'deleted_at',
        'created_at',
        'updated_at'
    ];
    public function produksi(){
        return $this->belongsTo(Produksi::class,'id_produksi','id');
    }
    public function detailPengolahan($id){
        return DB::table('produk')->where('id',$id)->first();
    }
}
