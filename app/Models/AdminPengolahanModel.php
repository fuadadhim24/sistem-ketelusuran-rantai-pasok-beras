<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdminPengolahanModel extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'pengolahan';
    protected $fillable = [
        'metode',
        'deskripsi',
        'lama',
        'hasil',
        'created_at',
        'id_gudang',
        'id_produksi',
        'id_user',
    ];

    protected $dates = ['created_at'];
    protected $dateFormat = 'Y-m-d H:i:s';

    public function produksi()
    {
        return $this->belongsTo(ProduksiModel::class, 'id_produksi')->with(['padi', 'lahan', 'panen']);
    }

    public function padi()
    {
        return $this->belongsTo(PadiModel::class, 'id_padi');
    }

    public function lahan()
    {
        return $this->belongsTo(LahanModel::class, 'id_lahan');
    }

    public function panen()
    {
        return $this->belongsTo(PanenModel::class, 'id');
    }

    public function gudang()
    {
        return $this->belongsTo(GudangModel::class, 'id_gudang');
    }
    public function pengemasan()
    {
        return $this->hasOne(PengemasanModel::class, 'id');
    }
    public function scopeNoPengolahan($query)
    {
        return $query->whereDoesntHave('pengolahan');
    }

    public function pengujian()
    {
        return $this->hasOne(Pengujian::class, 'id_produksi');
    }

    public function scopeNoPengujian($query)
    {
        return $query->whereDoesntHave('pengujian');
    }
    public static function pengolahanWithoutPengemasan(){
        return static::whereDoesntHave('pengemasan')->with(['produksi'])->latest()->get();
    }

}
