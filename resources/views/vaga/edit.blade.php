@extends('layout')
@section('content')

<body class="antialiased">
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Ocorreram erros! <br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('vaga.update', $vaga->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-lg12 margin-tb">
                <div class="pull-left">
                    <h2>Editar Página</h2>
                </div>
                <div class="pull-rigth">
                    <a class="btn btn-primary" href="{{route('vaga.index')}}">Voltar</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="campo-titulo" class="form-label">Título:</label>
                    <input type="text" id="campo-titulo" name="titulo" class="form-control" placeholder="Titulo" value="{{$vaga->titulo}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="campo-descricao" class="form-label">Descrição:</label>
                    <input type="text" id="campo-descricao" name="descricao" class="form-control" placeholder="Descricão" value="{{$vaga->descricao}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="campo-status" class="form-label">Status:</label>
                    <input type="text" id="campo-status" name="status" class="form-control" placeholder="Status" value="{{$vaga->status}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
    </form>
    @endsection