<?php

use App\Http\Controllers\InserirController;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\TransacaoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PrincipalController::class, 'index'])->name('site.principal');

Route::get('/transacao', [TransacaoController::class, 'index'])->name('site.transacoes');
Route::post('/transacao', [TransacaoController::class, 'store'])->name('site.transacoes.store');

Route::get('/adicionar', [InserirController::class, 'index'])->name('site.inserir');