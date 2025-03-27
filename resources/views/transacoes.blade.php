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
                    <td colspan="6">Dados das Transações</td>
                </tr>
                <tr>
                    <td>Nome</td>
                    <td>Valor</td>
                    <td>Tipo</td>
                    <td>Descrição</td>
                    <td>Deletar</td>
                </tr>
            </thead>

            <tbody>
                @foreach ($transacoes as $transacao)
                    <tr>
                        <td>{{ $transacao->nome }}</td>
                        <td>{{ number_format($transacao->valor, 2, ',', '.') }}</td>
                        <td>{{ ucfirst($transacao->tipo) }}</td>
                        <td>{{ $transacao->descricao }}</td>
                        <td>
                            <form action="{{ route('site.transacoes.destroy', $transacao->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir esta transação?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="botao-deletar"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection