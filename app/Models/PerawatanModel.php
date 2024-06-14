<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PerawatanModel extends Model
{
    use HasFactory;

    protected $table = 'perawatan';

    protected $fillable = [
        'jenis_perawatan',
        'nama_perawatan',
        'jumlah',
        'kebutuhan',
        'tanggal_perawatan',
        'id_user',
        'id_produksi',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function produksi()
    {
        return $this->belongsTo(ProduksiModel::class, 'id_produksi');
    }
}
