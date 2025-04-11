<?php

use App\Http\Controllers\InserirController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\TransacaoController;
use App\Models\Transacao;
use Illuminate\Support\Facades\Route;

Route::get('/', [PrincipalController::class, 'index'])->name('site.principal');

Route::get('/transacao', [TransacaoController::class, 'index'])->name('site.transacoes');
Route::post('/transacao', [TransacaoController::class, 'store'])->name('site.transacoes.store');
Route::get('/transacao/editar/{id}', [TransacaoController::class, 'editar'])->name('site.transacoes.editar');
Route::put('/transacao/editar/{id}', [TransacaoController::class, 'update'])->name('site.transacoes.update');
Route::delete('/transacao/{id}', [TransacaoController::class, 'destroy'])->name('site.transacoes.destroy');

Route::get('/adicionar', [InserirController::class, 'index'])->name('site.inserir');