<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\PenjualanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', [AuthController::class, 'login']);
Route::resource('kendaraan', KendaraanController::class);
Route::resource('penjualan', PenjualanController::class);
Route::group(['middleware' => ['auth:sanctum']], function () {
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
