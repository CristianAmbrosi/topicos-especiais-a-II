@extends('app')

@section('content')
    <div class="container">
        <h1>Majors</h1>

        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Nome</th>
                <th>descrição</th>
            </tr>
            </thead>
            <tbody>
            @foreach($major as $maj)
                <tr>
                    <td>{{ $maj->name }}</td>
                    <td>{{ $maj->description }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
