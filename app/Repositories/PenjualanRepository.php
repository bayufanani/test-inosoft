<?php

namespace App\Repositories;

use DateTime;
use DateTimeZone;
use App\Models\Penjualan;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;

class PenjualanRepository
{
    protected $penjualan, $kendaraanRepository;

    public function __construct(Penjualan $penjualan, KendaraanRepository $kendaraanRepository)
    {
        $this->penjualan = $penjualan;
        $this->kendaraanRepository = $kendaraanRepository;
    }

    function all()
    {
        return $this->penjualan->all();
    }
    function findById($id)
    {
        return $this->penjualan->find($id);
    }
    function create($data)
    {
        $data['tanggal_pembelian'] = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
        $baru = new $this->penjualan($data);
        $baru->save();
        $this->kendaraanRepository->kurangi($baru->id_kendaraan, $baru->jumlah_pembelian);
        return $baru;
    }
    function update($id, $data)
    {
    }
    function delete($id)
    {
    }
}
