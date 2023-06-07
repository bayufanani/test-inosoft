<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penjualan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_kendaraan',
        'nama_pelanggan',
        'tanggal_pembelian',
        'jumlah_pembelian',
    ];
    protected $casts = [
        'tanggal_pembelian' => 'datetime',
        'jumlah_pembelian' => 'integer',
    ];

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class, 'id_kendaraan');
    }
}
