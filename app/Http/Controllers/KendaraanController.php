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
}
