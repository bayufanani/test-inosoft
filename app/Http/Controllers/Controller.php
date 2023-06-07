<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function sendResponse($response, $pesan = 'sukses')
    {
        return response()->json([
            'sukses' => true,
            'message' => $pesan,
            'data' => $response,
        ]);
    }

    public function sendError($response, $pesan = 'gagal', $errorCode = 400)
    {
        return response()->json([
            'sukses' => false,
            'message' => $pesan,
            'data' => $response,
        ], $errorCode);
    }
}
