<?php

namespace App\Repositories;

use App\Models\Kendaraan;
use App\Repositories\BaseRepository;

class KendaraanRepository implements BaseRepository
{
    protected $kendaraan;

    public function __construct(Kendaraan $kendaraan)
    {
        $this->kendaraan = $kendaraan;
    }

    function all()
    {
        return $this->kendaraan->get();
    }
    function findById($id)
    {
        return $this->kendaraan->find($id);
    }
    function create($data)
    {
        $baru = $this->kendaraan->create($data);
        return $baru;
    }
    function update($id, $data)
    {
        $update = $this->kendaraan->find($id)->update($data);
        return $update;
    }
    function delete($id)
    {
        $delete = $this->kendaraan->find($id)->delete();
        return $delete;
    }

    public function reports()
    {
        return $this->kendaraan->with('penjualan')->get();
    }
}
