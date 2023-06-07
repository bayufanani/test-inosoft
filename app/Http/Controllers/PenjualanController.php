<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Services\PenjualanService;
use Exception;

class PenjualanController extends Controller
{
    public function index(PenjualanService $penjualanService)
    {
        return $penjualanService->all();
    }

    public function store(PenjualanService $penjualanService)
    {
        try {
            $penjualan = $penjualanService->create(request()->all());
            return $this->sendResponse($penjualan, 'Sukses menambahkan data penjualan');
        } catch (Exception $e) {
            return $this->sendError([], $e->getMessage());
        }
    }
}
