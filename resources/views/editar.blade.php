@extends('estrutura.estrutura')
@section('css')
    <link rel="stylesheet" href="{{ asset('editar/editar.css') }}">
@endsection

@section('conteudo')
    <header class="cabecalho">
        <h1>Editar Transação</h1>
    </header>

    <div class="botao-voltar-container">
        <a class="botao-voltar" href="{{ route('site.transacoes') }}">Voltar</a>
    </div>

    <div class="formulario-container">
        <form action="{{ route('site.transacoes.update', $transacao->id) }}" method="POST" class="formulario">

            @csrf
            @method('PUT')

            <div class="input-container">
                <label for="nome">Nome:</label>
                <br>
                <input type="text" name="nome" id="nome" value="{{ $transacao->nome }}">
                @error('nome')
                    <div class="erro">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-container">
                <label for="valor">Valor (R$):</label>
                <br>
                <input type="number" name="valor" id="valor" step="0.01" min="0" value="{{ $transacao->valor }}">
                @error('valor')
                    <div class="erro">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-container">
                <label for="tipo">Tipo:</label>
                <br>
                <input type="radio" name="tipo" value="entrada"> <span>Entrada</span>
                <input type="radio" name="tipo" value="saida"> <span>Saída</span>
                @error('tipo')
                    <div class="erro">{{ $message }}</div>
                @enderror
            </div>
            <div class="input-container">
                <label for="nome">Descrição:</label>
                <br>
                <textarea name="descricao" id="" cols="30" rows="4">{{ $transacao->descricao }}</textarea>
            </div>

            <div class="botao-container">
                <button type="submit" class="botao-inserir">Editar</button>
            </div>

        </form>
    </div>
@endsection