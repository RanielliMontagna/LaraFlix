@extends('layouts.app')

@section('content')
    <div
        style='display: flex; justify-content: center; align-items: center; height: calc(100vh - 109px); flex-direction: column '>
        <h1>
            Bem vindos ao sistema <b>LaraFlix</b>
        </h1>
        <h2 style='font-size: 1rem; '>
            Feito com <b>{{ config('app.name') }}</b>
        </h2>
        <p style='font-size: 1.5rem; margin-top: 2rem;'>
            O sistema consiste em um CRUD de atores onde é possível cadastrar, editar, excluir e listar atores.
        </p>

        <p>
            <a href="{{ route('atores') }}" class='btn btn-primary' style='margin-top: 2rem;'>
                Acessar atores
            </a>
        </p>

    </div>
@endsection
