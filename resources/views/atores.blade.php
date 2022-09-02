<!DOCTYPE html>
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

</html>
