<?php

namespace App\Services;

use DateTime;
use DateTimeZone;
use App\Repositories\PenjualanRepository;

class PenjualanService
{
    protected $penjualanRepository;
    public function __construct(PenjualanRepository $penjualanRepository)
    {
        $this->penjualanRepository = $penjualanRepository;
    }
    function all()
    {
        return $this->penjualanRepository->all();
    }
    function findById($id)
    {
        return $this->penjualanRepository->findById($id);
    }
    function create($data)
    {
        $data['tanggal_pembelian'] = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
        $baru = $this->penjualanRepository->create($data);
        return $baru;
    }
    function update($id, $data)
    {
    }
    function delete($id)
    {
    }
}
