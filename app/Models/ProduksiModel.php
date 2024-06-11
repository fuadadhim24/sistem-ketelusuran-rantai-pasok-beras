<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProduksiModel extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'produksi';

    protected $fillable = [
        'sumber_benih',
        'tanggal_produksi',
        'tanggal_kedaluwarsa',
        'tingkat_kemurnian',
        'tingkat_vigor',
        'jumlah_benih',
        'tanggal_penyemaian',
        'tanggal_penanaman',
        'id_padi',
        'id_lahan',
        'id_user'
    ];

    public function padi()
    {
        return $this->belongsTo(PadiModel::class, 'id_padi');
    }

    public function lahan()
    {
        return $this->belongsTo(LahanModel::class, 'id_lahan');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function panen()
    {
        return $this->hasOne(PanenModel::class, 'id_produksi');
    }

    public function perawatan()
    {
        return $this->hasMany(PerawatanModel::class, 'id_produksi');
    }
}
