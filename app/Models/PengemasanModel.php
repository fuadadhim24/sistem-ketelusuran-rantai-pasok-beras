<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PengemasanModel extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'pengemasan';

    protected $fillable = [
        'jenis_kemasan',
        'berat_kemasan',
        'jumlah_kemasan',
        'qr_code',
        'id_pengolahan',
    ];

    public function pengolahan()
    {
        return $this->belongsTo(AdminPengolahanModel::class, 'id_pengolahan');
    }
}
