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
        return $this->penjualan->with('kendaraan')->get();
    }
    function findById($id)
    {
        return $this->penjualan->find($id);
    }
    function create($data)
    {
        $baru = $this->penjualan->create($data);
        return $baru;
    }
    function update($id, $data)
    {
    }
    function delete($id)
    {
    }
}
