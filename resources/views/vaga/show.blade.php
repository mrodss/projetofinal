@extends('layout')
@section('content')

<body class="antialiased">
    <div class="row">
        <div class="col-lg12 margin-tb">
            <div class="pull-left">
                <h2>Visualizar Página</h2>
            </div>
            <div class="pull-rigth">
                <a class="btn btn-primary" href="{{route('vaga.index')}}">Voltar</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Título:</strong>
                {{$vaga->titulo}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descrição:</strong>
                {{$vaga->descricao}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                {{$vaga->status}}
            </div>
        </div>
    </div>
    @endsection