<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perawatan extends Model
{
    use HasFactory;
    protected $table = 'perawatan';

    protected $fillable = [
        'id',
        'jenis_perawatan',
        'nama_perawatan',
        'jumlah',
        'kebutuhan',
        'id_user',
        'id_produksi',
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
