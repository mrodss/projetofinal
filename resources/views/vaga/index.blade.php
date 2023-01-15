@extends('layout')
@section('content')

<body class="antialiased">
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Descrição</th>
            <th>Status</th>
            <th width="300px">Ações</th>
        </tr>

        @foreach ($listaVagas as $vaga)
        <tr>
            <td>{{$vaga->id}}</td>
            <td>{{$vaga->titulo}}</td>
            <td>{{$vaga->descricao}}</td>
            <td>{{$vaga->status}}</td>
            <td>
                <a class="btn btn-info" href="{{ route('vaga.show', $vaga->id)}}">Visualizar</a>
                <a class="btn btn-primary" href="{{ route('vaga.edit', $vaga->id)}}">Editar</a>
                <form action="{{route('vaga.destroy', $vaga->id)}}" method="POST"> @csrf @method('DELETE')<button type="submit" class="btn brn-danger">Apagar</button></form>
            </td>
        </tr>
        @endforeach
    </table>
    @endsection