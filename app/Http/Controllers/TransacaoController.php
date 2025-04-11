<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Transacao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class TransacaoController extends Controller
{
    public function index() 
    {
        $transacoes = Transacao::all();
        return view("transacoes", compact("transacoes"));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'valor' => 'required|numeric',
            'tipo' => 'required|in:entrada,saida',
            'descricao' => 'nullable|string'
        ],
        [
            'nome.required' => 'Campo nome é obrigatório',
            'valor.required' => 'Valor inválido',
            'tipo.required' => 'Campo tipo é obrigatório',
        ]);

        Transacao::create([
            'nome' => $request->nome,
            'valor' => $request->valor,
            'tipo' => $request->tipo,
            'descricao' => $request->descricao
        ]);

        return redirect()->route('site.transacoes');
    }

    public function editar($id) {
        $transacao = Transacao::findOrFail($id);

        return view('editar', compact('transacao'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'nome' => 'required|string|max:255',
            'valor' => 'required|numeric',
            'tipo' => 'required|in:entrada,saida',
            'descricao' => 'nullable|string'
        ],
        [
            'nome.required' => 'Campo nome é obrigatório',
            'valor.required' => 'Valor inválido',
            'tipo.required' => 'Campo tipo é obrigatório',
        ]);

        Transacao::where('id', $id)->update([
            'nome' => $request->nome,
            'valor' => $request->valor,
            'tipo' => $request->tipo,
            'descricao' => $request->descricao
        ]);

        return redirect()->route('site.transacoes');
    }

    public function destroy($id) 
    {
        $transacao = Transacao::findOrFail($id);
        $transacao->delete();

        return redirect()->route('site.transacoes');
    }
}
