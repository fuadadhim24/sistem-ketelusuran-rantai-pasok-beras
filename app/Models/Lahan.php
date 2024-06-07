<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lahan extends Model
{
    use HasFactory;
    protected $table = 'lahan';

    protected $fillable = [
        'id',
        'nama_lahan',
        'detail_lokasi',
        'luas',
        'latitude',
        'longlitude',
        'jenis_tanah',
        'id_user',
        'deleted_at',
        'created_at',
        'updated_at'
    ];


    public function produksi(){
        return $this->hasOne(Produksi::class,'id_lahan', 'id');
    }
    public function detailPengolahan($id){
        return DB::table('produk')->where('id',$id)->first();
    }
}
