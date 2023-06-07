<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Kendaraan extends Model
{

    use HasFactory;

    protected $fillable = [
        'tahun_keluaran',
        'warna',
        'harga',
        'mesin',
        'tipe_suspensi',
        'tipe_transmisi',
        'kapasitas_penumpan',
        'tipe',
        'jenis',
        'stok',
    ];

    protected $casts = [
        'tahun_keluaran' => 'integer',
        'harga' => 'integer',
        'stok' => 'integer',
    ];

    public function penjualan()
    {
        return $this->belongsToMany(Penjualan::class, 'id_kendaraan');
    }
}
