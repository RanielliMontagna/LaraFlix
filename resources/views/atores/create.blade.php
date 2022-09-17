@extends('adminlte::page')

@section('content')
    <h3>Novo ator</h3>
    {!! Form::open(['url' => 'atores/store']) !!}


    <div class="form-group">
        {!! Form::label('nome', 'Nome:') !!}
        {!! Form::text('nome', null, ['class' => 'form-control', 'required']) !!}
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
            'BRA',
            [
                'class' => 'form-control',
                'required',
            ],
        ) !!}
    </div>

    <div class="form-group">
        {!! Form::label('dt_nascimento', 'Data de nascimento:') !!}
        {!! Form::date('dt_nascimento', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('inicio_atividades', 'Início de atividades:') !!}
        {!! Form::date('inicio_atividades', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Criar ator', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
        {!! Form::button('Voltar', ['class' => 'btn btn-default', 'onclick' => 'window.history.back()']) !!}
    </div>

    {!! Form::close() !!}
@stop
