<?php

use App\Http\Controllers\BairroController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\UfController;
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
Route::get('/teste' , function(){
    return "Teste com sucesso";
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//ROTAS PARA UF
Route::post('/uf', [UfController::class , 'store']);
Route::get('/uf', [UfController::class , 'index']);
Route::get('/uf/{id}', [UfController::class , 'show']);
Route::put('/uf/{id}', [UfController::class , 'update']);
Route::delete('/uf/{id}', [UfController::class , 'destroy']);

//ROTAS PARA MUNICIPIOS
Route::post('/municipio', [MunicipioController::class , 'store']);
Route::get('/municipio', [MunicipioController::class , 'index']);
Route::get('/municipio/{id}', [MunicipioController::class , 'show']);
Route::put('/municipio/{id}', [MunicipioController::class , 'update']);
Route::delete('/municipio/{id}', [MunicipioController::class , 'destroy']);

//ROTAS PARA BAIRROS
Route::post('/bairro', [BairroController::class , 'store']);
Route::get('/bairro', [BairroController::class , 'index']);
Route::get('/bairro/{id}', [BairroController::class , 'show']);
Route::put('/bairro/{id}', [BairroController::class , 'update']);
Route::delete('/bairro/{id}', [BairroController::class , 'destroy']);

//ROTAS PARA PESSOAS
Route::post('/pessoa', [PessoaController::class , 'store']);
Route::get('/pessoa', [PessoaController::class , 'index']);
Route::get('/pessoa/{id}', [PessoaController::class , 'show']);
Route::put('/pessoa/{id}', [PessoaController::class , 'update']);
Route::delete('/pessoa/{id}', [PessoaController::class , 'destroy']);

//ROTAS PARA ENDERECO
Route::post('/endereco', [EnderecoController::class , 'store']);
Route::get('/endereco', [EnderecoController::class , 'index']);
Route::get('/endereco/{id}', [EnderecoController::class , 'show']);
Route::put('/endereco/{id}', [EnderecoController::class , 'update']);
Route::delete('/endereco/{id}', [EnderecoController::class , 'destroy']);