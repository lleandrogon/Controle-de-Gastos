@extends('estrutura.estrutura')
@section('css')
    <link rel="stylesheet" href="transacoes/transacoes.css">
@endsection

@section('conteudo')
    <header class="cabecalho">
        <h1>Transações</h1>
    </header>

    <div class="botao-voltar-container">
        <a class="botao-voltar" href="{{ route('site.principal') }}">Voltar</a>
    </div>

    <div class="container-tabela">
        <table class="tabela">
            <thead>
                <tr class="titulo-tabela">
                    <td colspan="5">Dados das Transações</td>
                </tr>
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Valor</td>
                    <td>Tipo</td>
                    <td>Descrição</td>
                </tr>
            </thead>

            <tbody>
                @foreach ($transacoes as $transacao)
                    <tr>
                        <td>{{ $transacao->id }}</td>
                        <td>{{ $transacao->nome }}</td>
                        <td>{{ number_format($transacao->valor, 2, ',', '.') }}</td>
                        <td>{{ ucfirst($transacao->tipo) }}</td>
                        <td>{{ $transacao->descricao }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection