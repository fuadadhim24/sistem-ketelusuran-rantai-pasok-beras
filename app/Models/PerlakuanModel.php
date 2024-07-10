<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PerlakuanModel extends Model
{
    use SoftDeletes, HasFactory;

    protected $table = 'perlakuan_utama';

    protected $fillable = [
        'nama_perlakuan_utama',
        'hari',
        'durasi',
        'id_fase',
    ];

    protected $dates = ['deleted_at', 'created_at', 'updated_at'];

    public function fase()
    {
        return $this->belongsTo(Fase::class, 'id_fase', 'id');
    }
}
