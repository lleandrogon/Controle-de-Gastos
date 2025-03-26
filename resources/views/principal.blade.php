@extends('estrutura.estrutura')
@section('css')
    <link rel="stylesheet" href="principal/principal.css">
@endsection

@section('conteudo')
    <header class="cabecalho">
        <h1>Controle de Gastos</h1>
    </header>

    <div class="conta">
        <div class="saldo">
            <h2>Saldo: R$ {{ number_format($saldo, 2, ",", ".") }}</h2>
            <p>Última atualização: {{ $dataAtualizacao }}</p>
        </div>
        <div class="gastos">
            <h2>Gastos: R$ {{ number_format($gastos, 2, ",", ".") }}</h2>
            <p>Última atualização: {{ $dataAtualizacao }}</p>
        </div>
    </div>

    <div class="container-grafico">
        <div class="grafico">
            <canvas id="myChart"></canvas> {{-- Gráfico Doughnut --}}
        </div>
        <div class="grafico">
            <canvas id="myBarChart"></canvas> {{-- Gráfico de Barra --}}
        </div>
    </div>

    <div class="botao-transacoes-container">
        <a class="botao-transacoes" href="{{ route('site.transacoes') }}">Dados</a>
        <a class="botao-transacoes" href="{{ route('site.inserir') }}">Inserir</a>
    </div>

    {{-- Passando os dados do PHP para o JavaScript --}}
    <script>
        const saldo = {{ $saldo }};
        const gastos = {{ $gastos }};
    </script>

    {{-- Scripts dos Gráficos --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="principal/principal.js"></script>
@endsection