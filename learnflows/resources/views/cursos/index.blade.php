@extends('app')

@section('content')
    <div class="container">
        <h1>Cursos</h1>

        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Nome</th>
                <th>descrição</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cursos as $cursos)
                <tr>
                    <td>{{ $cursos->name }}</td>
                    <td>{{ $cursos->description }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
