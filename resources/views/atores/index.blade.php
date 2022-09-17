@extends('adminlte::page')

@section('title', 'Atores')

@section('content')
    <div class="ribbon-wrapper" style='position: absolute; z-index: 99999999'>
        <div class="ribbon bg-primary">
            Dev
        </div>
    </div>
    <header style='display: flex; justify-content: space-between; align-items: center; padding: 16px 0px'>
        <h1>Atores</h1>
        <button class='btn btn-primary'onclick="window.location.href = '/atores/create'">Adicionar
            ator</button>
    </header>
    <div style='display: flex; gap: 16px'>
        <div class="small-box bg-info" style='flex: 1'>
            <div class="inner">
                <h3>3</h3>
                <p>Quantidade de atores</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
        </div>
        <div class="small-box bg-info bg-gradient-success" style='flex: 1'>
            <div class="inner">
                <h3>Norte-americana</h3>
                <p>Maior nacionalidade</p>
            </div>
            <div class="icon">
                <i class="fas fa-flag"></i>
            </div>
        </div>
        <div class="small-box bg-info bg-gradient-purple" style='flex: 1'>
            <div class="inner">
                <h3>10</h3>
                <p>Lorem ipsum dolor</p>
            </div>
            <div class="icon">
                <i class="fas fa-shopping-cart"></i>
            </div>
        </div>
    </div>
    <table class='table table-stripe table-bordered table-hover'>
        <thead>
            <th>Nome</th>
            <th>Data de nascimento</th>
            <th>Nacionalidade</th>
            <th>Iniciação</th>
        </thead>
        <tbody>
            @foreach ($atores as $ator)
                <tr>
                    <td>{{ $ator->nome }}</td>
                    <td>{{ date('d/m/Y', strtoTime($ator->dt_nascimento)) }}</td>
                    <td>{{ $ator->nacionalidade }}</td>
                    <td>{{ date('d/m/Y', strtoTime($ator->inicio_atividades)) }}</td>
                </tr>
            @endforeach
    </table>
@stop

{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atores</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, sans-serif
        }

        body {
            padding: 32px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        div.atores {
            margin-top: 32px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        div.nome {
            font-size: 1.2em;
            font-weight: 700;
        }
    </style>
</head>

<body>
    <h1>Atores</h1>
    <p>Bem-vindo a listagem de atores </p>
    <div class='atores'>
        @foreach ($atores as $ator)
            <div class='nome'>{{ $ator->nome }}</div>
            <div class='informacoes'>
                <div>{{ $ator->nacionalidade }}</div>
                <div>{{ date('d/m/Y', strtoTime($ator->dt_nascimento)) }}</div>
                <div>{{ date('d/m/Y', strtoTime($ator->inicio_atividades)) }}</div>
            </div>
            <br />
        @endforeach
    </div>
</body>

</html> --}}
