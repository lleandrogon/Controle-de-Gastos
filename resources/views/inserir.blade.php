@extends('estrutura.estrutura')
@section('css')
    <link rel="stylesheet" href="inserir/inserir.css">
@endsection

@section('conteudo')
    <header class="cabecalho">
        <h1>Inserir Transações</h1>
    </header>

    <div class="botao-voltar-container">
        <a class="botao-voltar" href="{{ route('site.principal') }}">Voltar</a>
    </div>

    <div class="formulario-container">
        <form action="{{ route('site.transacoes.store') }}" method="POST" class="formulario">

            @csrf

            <div class="input-container">
                <label for="nome">Nome:</label>
                <br>
                <input type="text" name="nome" id="nome">
            </div>
            <div class="input-container">
                <label for="valor">Valor (R$):</label>
                <br>
                <input type="number" name="valor" id="valor" step="0.01" min="0">
            </div>
            <div class="input-container">
                <label for="tipo">Tipo:</label>
                <br>
                <input type="radio" name="tipo" value="entrada"> <span>Entrada</span>
                <input type="radio" name="tipo" value="saida"> <span>Saída</span>
            </div>
            <div class="input-container">
                <label for="nome">Descrição:</label>
                <br>
                <textarea name="descricao" id="" cols="30" rows="4"></textarea>
            </div>

            <div class="botao-container">
                <button type="submit" class="botao-inserir">Inserir</button>
            </div>

        </form>
    </div>
@endsection