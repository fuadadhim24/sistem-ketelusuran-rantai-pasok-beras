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

    public function pengolahan()
    {
        return $this->hasOne(AdminPengolahanModel::class, 'id_produksi')->with(['padi', 'lahan', 'panen']);
    }
    public function produk()
    {
        return $this->hasOne(Produk::class, 'id_produksi');
    }
    public function pengujian()
    {
        return $this->hasOne(Pengujian::class, 'id_produksi');
    }
    public function pengemasan()
    {
        return $this->hasOne(PengemasanModel::class, 'id_pengolahan');
    }

    public static function getProduksiWithoutPengujian()
    {
        return static::whereDoesntHave('pengujian')
            ->with(['pengolahan'])
            ->get()
            ->toArray();
    }

    public static function getProduksiHasPengujian()
    {
        return static::whereHas('pengujian')
            ->with(['pengujian','pengolahan'])
            ->get();
    }
}