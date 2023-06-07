<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Services\KendaraanService;

class KendaraanController extends Controller
{
    public function index(KendaraanService $kendaraanService)
    {
        return $kendaraanService->all();
    }

    public function store(kendaraanService $kendaraanService)
    {
        // sementara simpan semua
        try {
            $kendaraan = $kendaraanService->create(request()->all());
            return $this->sendResponse($kendaraan, 'Sukses menambahkan data kendaraan');
        } catch (\Exception $e) {
            return $this->sendError([], $e->getMessage());
        }
    }

    public function update($id, kendaraanService $kendaraanService)
    {
        $kendaraan = $kendaraanService->update($id, request()->all());
        return $this->sendResponse($kendaraan, 'Sukses mengubah data kendaraan');
    }

    public function destroy($id, kendaraanService $kendaraanService)
    {
        $kendaraan = $kendaraanService->delete($id);
        return $this->sendResponse($kendaraan, 'Sukses menghapus data kendaraan');
    }

    public function reports(KendaraanService $kendaraanService)
    {
        $reports = $kendaraanService->reports();
        return $this->sendResponse($reports, 'Sukses mengambil data laporan');
    }
}
