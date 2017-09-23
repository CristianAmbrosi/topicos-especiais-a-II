@extends('app')

@section('content')
	<div class="container">
		<h1>Habitos</h1>
		<table class="table table-striped table-houver">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Descrição</th>
					<th>Tipo</th>
					<th>Ação</th>
				</tr>
			</thead>
			<tbody>
			@foreach($habitos as $hab)
				<td>{{$hab->nome}}</td>
				<td>{{$hab->descricao}}</td>
				<td>{{$hab->tp_habito}}</td>
			@endforeach
			</tbody>
		</table>
	</div>
@endsection

