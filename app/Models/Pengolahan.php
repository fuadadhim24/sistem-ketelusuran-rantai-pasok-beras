<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengolahan extends Model
{
    use HasFactory;
    protected $fillable=['id','kode_produk','nama_produk','deleted_at'];
    protected $table='produk';

}
