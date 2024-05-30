<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    // protected $fillable=['id','id_produksi','kode_produk','nama_produk','deleted_at'];
    protected $table='produk';

    public function produksi(){
        return $this->belongsTo(Produksi::class,'id_produksi','id');
    }
    public function detailPengolahan($id){
        return DB::table('produk')->where('id',$id)->first();
    }
}
