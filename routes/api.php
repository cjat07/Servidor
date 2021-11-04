<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/crear', [App\Http\Controllers\ClienteVehiculoController::class, 'index']);
Route::post('/crear', [App\Http\Controllers\ClienteVehiculoController::class, 'create']);
Route::get('/marcas',[App\Http\Controllers\MarcaController::class,'index']);
Route::get('/getmarcas',[App\Http\Controllers\MarcaController::class,'all']);
Route::get('/getTipoVehiculo',[App\Http\Controllers\TipoVehiculoController::class,'index']);
