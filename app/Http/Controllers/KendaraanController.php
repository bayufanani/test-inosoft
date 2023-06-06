<?php

namespace App\Http\Controllers;

use App\Repositories\KendaraanRepository;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index(KendaraanRepository $kendaraanRepository)
    {
        return $kendaraanRepository->all();
    }

    public function store(KendaraanRepository $kendaraanRepository)
    {
        // sementara simpan semua
        $kendaraan = $kendaraanRepository->create(request()->all());
        return $this->sendResponse($kendaraan, 'Sukses menambahkan data kendaraan');
    }

    public function update($id, KendaraanRepository $kendaraanRepository)
    {
        $kendaraan = $kendaraanRepository->update($id, request()->all());
        return $this->sendResponse($kendaraan, 'Sukses mengubah data kendaraan');
    }

    public function destroy($id, KendaraanRepository $kendaraanRepository)
    {
        $kendaraan = $kendaraanRepository->delete($id);
        return $this->sendResponse($kendaraan, 'Sukses menghapus data kendaraan');
    }
}
