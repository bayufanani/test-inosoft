<?php

namespace App\Services;

use DateTime;
use DateTimeZone;
use MongoDb\BSON\ObjectId;
use App\Repositories\PenjualanRepository;

class PenjualanService
{
    protected $penjualanRepository, $kendaraanService;
    public function __construct(PenjualanRepository $penjualanRepository, KendaraanService $kendaraanService)
    {
        $this->penjualanRepository = $penjualanRepository;
        $this->kendaraanService = $kendaraanService;
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
        $id_kendaraan = $data['id_kendaraan'];
        $kendaraan = $this->kendaraanService->findById($id_kendaraan);
        if ($kendaraan->stok - $data['jumlah_pembelian'] < 0) {
            return throw new \Exception('Stok kendaraan tidak mencukupi, sisa stok ' . $kendaraan->stok);
        }
        $this->kendaraanService->reduceStok($kendaraan->id, $data['jumlah_pembelian']);
        // $data['id_kendaraan'] = new ObjectId($id_kendaraan);
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
