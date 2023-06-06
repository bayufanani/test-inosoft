<?php

namespace App\Http\Controllers;

use App\Repositories\PenjualanRepository;
use App\Services\PenjualanService;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index(PenjualanService $penjualanService)
    {
        return $penjualanService->all();
    }

    public function store(PenjualanService $penjualanService)
    {
        $penjualan = $penjualanService->create(request()->all());
        return $this->sendResponse($penjualan, 'Sukses menambahkan data penjualan');
    }
}
