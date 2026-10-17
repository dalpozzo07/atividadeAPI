<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\carroController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// as rotas da api que podem ser consumidas, a principio vou usar o imsominia
Route::get('/carros', [carroController::class, 'index']);
Route::get('/carros/{id}', [carroController::class, 'show']);
Route::post('/carros', [carroController::class, 'store']);
Route::put('/carros/{id}', [carroController::class, 'update']);
Route::delete('/carros/{id}', [carroController::class, 'destroy']);

// a parte de fazer uma api é bem simples, até para testar no imsomnia, é só criar as rotas e
// depois criar o controller e o model, e depois criar a migration para criar a
//  tabela no banco de dados, e depois é só testar no imsomnia, que é bem dboas