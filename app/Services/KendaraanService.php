<?php

namespace App\Services;

use App\Repositories\KendaraanRepository;

class KendaraanService
{
    protected $kendaraanRepository;

    public function __construct(KendaraanRepository $kendaraanRepository)
    {
        $this->kendaraanRepository = $kendaraanRepository;
    }

    function all()
    {
        return $this->kendaraanRepository->all();
    }

    function findById($id)
    {
        return $this->kendaraanRepository->findById($id);
    }
    function create($data)
    {
        $baru = $this->kendaraanRepository->create($data);
        return $baru;
    }
    function update($id, $data)
    {
        $update = $this->kendaraanRepository->findById($id)->update($data);
        return $update;
    }
    function delete($id)
    {
        $delete = $this->kendaraanRepository->findById($id)->delete();
        return $delete;
    }
}
