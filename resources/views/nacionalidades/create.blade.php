@extends('adminlte::page')

@section('content')
    <h3>Nova nacionalidade</h3>
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['route' => 'nacionalidades.store']) !!}

    <div class="form-group">
        {!! Form::label('descricao', 'Descrição:') !!}
        {!! Form::text('descricao', null, ['class' => 'form-control', 'required']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Criar nacionalidade', ['class' => 'btn btn-primary']) !!}
        {!! Form::reset('Limpar', ['class' => 'btn btn-default']) !!}
        {!! Form::button('Voltar', ['class' => 'btn btn-default', 'onclick' => 'window.history.back()']) !!}
    </div>

    {!! Form::close() !!}
@stop
