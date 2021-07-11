@extends('adminlte::page')

@section('title', 'Configurações')


@section('content_header')
<h1>Configurações do site</h1>
@endsection

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            <h5><li class="icon fas fa-ban"></li>Ocorreu um erro</h5>

            @foreach ($errors->all() as $error)
    <li>{{$error}}</li> 
            @endforeach
        </ul>
    </div>
@endif

@if(session('warning'))
        <div class="alert alert-success">
            {{session('warning')}}
        </div>
@endif

    <div class="card">
        <div class="card-body">
        <form action="{{route('settings.save')}}" method="POST" class="form-horizontal">
            @method('PUT')
            @csrf

            <div class="form-group row">
                <label class="col-sm-2 col-from-label">Titulo do site</label>
                <div class="col-sm-10">
                <input type="text" name="title" value="{{$settings['title']}}" class="form-control"/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-from-label">Sub-Titulo do site</label>
                <div class="col-sm-10">
                    <input type="text" name="subtitle" value="{{$settings['subtitle']}}" class="form-control"/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-from-label">Email para contato</label>
                <div class="col-sm-10">
                    <input type="email" name="email" value="{{$settings['email']}}" class="form-control"/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-from-label">Cor do Fundo</label>
                <div class="col-sm-10">
                    <input type="color" name="bgcolor" value="{{$settings['bgcolor']}}" class="form-control" style="width:70px"/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-from-label">cor do texto</label>
                <div class="col-sm-10">
                    <input type="color" name="textcolor" value="{{$settings['textcolor']}}" class="form-control" style="width:70px"/>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-from-label"></label>
            <div class="col-sm-6">
                <input type="submit" value="Salvar" class="btn btn-success">
        </div>
    </div>

            </form>
        </div>
    </div>
@endsection

