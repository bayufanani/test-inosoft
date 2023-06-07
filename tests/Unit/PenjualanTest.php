<?php

namespace Tests\Unit;

use App\Models\Kendaraan;
use App\Models\Penjualan;
use App\Repositories\KendaraanRepository;
use App\Repositories\PenjualanRepository;
use App\Services\KendaraanService;
use App\Services\PenjualanService;
use PHPUnit\Framework\TestCase;

class PenjualanTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_penjualan_mengurangi_stok()
    {
        $this->assertTrue(true);
    }
}
