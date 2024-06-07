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
        'kategori', // Added new column
        'deskripsi',
        'karakteristik_hasil', // Updated column name
        'keunggulan',
        'jenis_musim',
        'lama_tanam',
        'ketahanan_hama_penyakit',
        'deleted_at',
        'created_at',
        'updated_at'
    ];

    // public function produksi(){
    //     return $this->belongsTo(Produksi::class,'id_produksi', 'id');
    // }
    public function produksi(){
        return $this->hasOne(Produksi::class,'id_padi', 'id');
    }
    public function detailPengolahan($id){
        return DB::table('produk')->where('id',$id)->first();
    }
}
