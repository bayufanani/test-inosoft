<?php

namespace App\Repositories;

use App\Models\Penjualan;
use App\Repositories\BaseRepository;

class PenjualanRepository implements BaseRepository
{
    protected $penjualan;

    public function __construct(Penjualan $penjualan)
    {
        $this->penjualan = $penjualan;
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
        $baru = new $this->penjualan;
        $baru->app = $data;
        $baru->save();
        return $baru;
    }
    function update($id, $data)
    {
    }
    function delete($id)
    {
    }
}
