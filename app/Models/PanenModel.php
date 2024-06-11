<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PanenModel extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'panen';

    protected $fillable = [
        'quantity',
        'metode_panen',
        'catatan',
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
