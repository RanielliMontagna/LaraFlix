@extends('layouts.default')

@section('title', 'Nacionalidades')

@section('content')
    <header style='display: flex; justify-content: space-between; align-items: center; padding: 16px 0px'>
        <h1>Nacionalidades</h1>
        <button class='btn btn-primary'onclick="window.location.href = '/nacionalidades/create'">
            Adicionar nacionalidade
        </button>
    </header>
    <table class='table table-stripe table-bordered table-hover'>
        <thead>
            <th>Descrição</th>
            <th>Ações</th>
        </thead>
        <tbody>
            @foreach ($nacionalidades as $nacionalidade)
                <tr>
                    <td>{{ $nacionalidade->descricao }}</td>
                    <td>
                        <a href="{{ route('nacionalidades.edit', ['id' => $nacionalidade->id]) }}"
                            class='btn btn-primary'>Editar</a>
                        <a href="#" onclick="return ConfirmaExclusao({{ $nacionalidade->id }})"
                            class='btn btn-danger'>Excluir</a>
                    </td>
                </tr>
            @endforeach
    </table>

    {{ $nacionalidades->links() }}
@stop

@section('table-delete')
    "nacionalidades"
@endsection
