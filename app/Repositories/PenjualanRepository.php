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

    public function all()
    {
        return $this->penjualan->get();
    }
    public function findById($id)
    {
        return $this->penjualan->find($id);
    }
    public function create($data)
    {
        $baru = $this->penjualan->create($data);
        return $baru;
    }
    public function update($id, $data)
    {
    }
    public function delete($id)
    {
    }
}
