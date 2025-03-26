<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Transacao;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PrincipalController extends Controller
{
    public function index()
    {
        $entradas = Transacao::where('tipo', 'entrada')->sum('valor');
        $saidas = Transacao::where('tipo', 'saida')->sum('valor');
        $saldo = $entradas - $saidas;
        $gastos = $saidas;
        $dataAtualizacao = Carbon::now()->format("d/m/y");
        
        return view("principal", compact("saldo", "gastos", "dataAtualizacao"));
    }
}
