<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\ProduksiModel;

class Produk extends Model
{
    use HasFactory;
    // protected $fillable=['id','id_produksi','kode_produk','nama_produk','deleted_at'];
    protected $table='produk';
    protected $fillable=[
        'nama_produk',
        'jumlah_unit',
        'foto',
        'harga',
        'deskripsi'
    ];

    public function produksi(){
        return $this->belongsTo(ProduksiModel::class,'id_produksi','id');
    }
    public function detailPengolahan($id){
        return DB::table('produk')->where('id',$id)->first();
    }
    public function scopeByCategory($query, $category)
    {
        return $query->where('nama_produk', 'like', '%' . $category . '%');
    }
}
