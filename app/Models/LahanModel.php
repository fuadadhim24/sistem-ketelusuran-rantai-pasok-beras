<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LahanModel extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'lahan';

    protected $fillable = [
        'nama_lahan',
        'detail_lokasi',
        'luas',
        'latitude',
        'longitude',
        'jenis_tanah',
        'id_user',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function produksi()
    {
        return $this->hasMany(ProduksiModel::class, 'id_lahan');
    }
}
