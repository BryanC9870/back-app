<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\InvoicesController; // importación de controlador de facturas

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

Route::get('/invoices/index', [InvoicesController::class, 'index']); // declaración de ruta que retorna todas las facturas

Route::get('/invoices/{id}', [InvoicesController::class, 'show']); // declaración de ruta que retorna datos de una factura

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
