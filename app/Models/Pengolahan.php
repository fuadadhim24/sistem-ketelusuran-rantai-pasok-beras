<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengolahan extends Model
{
    use HasFactory;
    protected $table = 'pengolahan';

    protected $fillable = [
        'id',
        'hasil_penggilingan',
        'kemasan',
        'id_gudang',
        'id_user',
        'id_produksi',
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
