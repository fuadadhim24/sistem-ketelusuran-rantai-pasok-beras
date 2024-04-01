<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fase extends Model
{
    use HasFactory;
    protected $table = 'fase'; // Menyesuaikan nama tabel dengan bentuk plural
    protected $fillable = [
        'nama_fase',
        'durasi'
    ];
}
