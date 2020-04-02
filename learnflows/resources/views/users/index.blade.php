@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Bem vindo <b>{{Auth::user()->name}}</b></h1>

    {!! Form::open() !!}
      <div class="form-group">
        {!! Form::label('name', 'Nome:') !!}
        {!! Form::text('name', Auth::user()->name, [
            'class' => 'form-control',
            'disabled' => 'disabled'
          ])
        !!}

        {!! Form::label('dataNasc', 'Data de nascimento:') !!}
        {!! Form::date('dataNasc', Auth::user()->dataNasc, [
            'class' => 'form-control',
            'disabled' => 'disabled'
          ])
        !!}

        {!! Form::label('adress', 'Endereço:') !!}
        {!! Form::text('adress', Auth::user()->adress, [
            'class' => 'form-control',
            'disabled' => 'disabled'
          ])
        !!}

        {!! Form::label('city', 'Cidade:') !!}
        {!! Form::text('city', Auth::user()->city, [
            'class' => 'form-control',
            'disabled' => 'disabled'
          ])
        !!}

        {!! Form::label('state', 'Estado:') !!}
        {!! Form::text('state', Auth::user()->state, [
            'class' => 'form-control',
            'disabled' => 'disabled'
          ])
        !!}

        {!! Form::label('escolaridade', 'Escolaridade:') !!}
        {!! Form::text('escolaridade', Auth::user()->escolaridade, [
            'class' => 'form-control',
            'disabled' => 'disabled'
          ])
        !!}

        {!! Form::label('profissao', 'Profissão:') !!}
        {!! Form::text('profissao', Auth::user()->profissao, [
            'class' => 'form-control',
            'disabled' => 'disabled'
          ])
        !!}

        {!! Form::label('email', 'E-mail:') !!}
        {!! Form::text('email', Auth::user()->email, [
            'class' => 'form-control',
            'disabled' => 'disabled'
          ])
        !!}
      </div>
    {!! Form::close() !!}

    <a href="{{ route('user.edit', [Auth::user()->id]) }}" class="btn-sm btn-success">Editar cadastro</a>
  </div>
@endsection
