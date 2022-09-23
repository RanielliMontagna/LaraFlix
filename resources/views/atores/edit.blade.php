@extends('adminlte::page')

@section('content')
    <h3>Editando ator</h3>
    {!! Form::open(['route' => ['atores.update', 'id' => $ator->id], 'method' => 'put']) !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <div class="form-group">
        {!! Form::label('nome', 'Nome:') !!}
        {!! Form::text('nome', $ator->nome, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('nacionalidade', 'Nacionalidade:') !!}
        {!! Form::select(
            'nacionalidade',
            [
                'BRA' => 'Brasileiro',
                'USA' => 'Americano',
                'CAN' => 'Canadense',
                'ARG' => 'Argentino',
            ],
            $ator->nacionalidade,
            [
                'class' => 'form-control',
                'required',
            ],
        ) !!}
    </div>

    <div class="form-group">
        {!! Form::label('dt_nascimento', 'Data de nascimento:') !!}
        {!! Form::date('dt_nascimento', $ator->dt_nascimento, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('inicio_atividades', 'Início de atividades:') !!}
        {!! Form::date('inicio_atividades', $ator->inicio_atividades, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Editar ator', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
        {!! Form::button('Voltar', ['class' => 'btn btn-default', 'onclick' => 'window.history.back()']) !!}
    </div>

    {!! Form::close() !!}
@stop
