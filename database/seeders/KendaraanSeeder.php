<?php

namespace Database\Seeders;

use App\Models\Kendaraan;
use Illuminate\Database\Seeder;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kendaraan::insert([
            [
                "tahun_keluaran" => 2012,
                "warna" => "merah",
                "harga" => 2000000,
                "mesin" => "110cc",
                "tipe_suspensi" => "Suspensi MacPherson Strut",
                "tipe_transmisi" => "matic",
                "jenis" => "motor",
                "stok" => 3,
            ],
            [
                "tahun_keluaran" => 2011,
                "warna" => "hitam",
                "harga" => 2100000,
                "mesin" => "125cc",
                "tipe_suspensi" => "Suspensi MacPherson Strut",
                "tipe_transmisi" => "manual",
                "jenis" => "motor",
                "stok" => 12,
            ],
            [
                "tahun_keluaran" => 2010,
                "warna" => "putih",
                "harga" => 200000000,
                "mesin" => "1000cc",
                "tipe_suspensi" => "tidak tau",
                "tipe_transmisi" => "manual",
                "jenis" => "mobil",
                "stok" => 2,
            ]
        ]);
    }
}
