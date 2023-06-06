<?php

namespace App\Http\Controllers;

use App\Repositories\PenjualanRepository;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index(PenjualanRepository $penjualanRepository)
    {
        return $penjualanRepository->all();
    }

    public function store(PenjualanRepository $penjualanRepository)
    {
        $penjualan = $penjualanRepository->create(request()->all());
        return $this->sendResponse($penjualan, 'Sukses menambahkan data penjualan');
    }
}
