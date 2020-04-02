@extends('app')

@section('content')
	<div class="container">
		<h1>Edição do usuário: <b>{{$users->name}}</b></h1>

		@if($errors->any())
			<ul class="alert alert-danger">
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		@endif

		{!! Form::open(['route'=>['users.update', $users->id], 'method'=>'put']) !!}
			<div class="form-group">
				{!! Form::label('name', 'Nome:') !!}
				{!! Form::text('name', $users->name, ['class' => 'form-control']) !!}

				{!! Form::label('dataNasc', 'Data de nascimento:') !!}
				{!! Form::date('dataNasc', $users->dataNasc, ['class' => 'form-control']) !!}

				{!! Form::label('adress', 'Endereço:') !!}
				{!! Form::text('adress', $users->adress, ['class' => 'form-control']) !!}

				{!! Form::label('city', 'Cidade:') !!}
				{!! Form::text('city', $users->city, ['class' => 'form-control']) !!}

				{!! Form::label('state', 'Estado:') !!}
				{!! Form::text('state', $users->state, ['class' => 'form-control']) !!}

				{!! Form::label('escolaridade', 'Escolaridade:') !!}
				{!! Form::text('escolaridade', $users->escolaridade, ['class' => 'form-control']) !!}

				{!! Form::label('profissao', 'Profissão:') !!}
				{!! Form::text('profissao', $users->profissao, ['class' => 'form-control']) !!}

				{!! Form::label('email', 'E-mail:') !!}
				{!! Form::text('email', $users->email, ['class' => 'form-control']) !!}

			</div>
			{!! Form::submit('Salvar alterações', ['class' => 'btn btn-primary']) !!}
		{!! Form::close() !!}
	</div>
@endsection
