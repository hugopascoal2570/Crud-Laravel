@extends('adminlte::page')

@section('title', 'Meu Perfil')


@section('content_header')
<h1>Meu Perfil</h1>
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
    <form action="{{route('profile.save')}}" method="POST" class="form-horizontal">
        @method('PUT')
        @csrf 
        <div class="form-group row">
            <label class="col-sm-2 col-from-label">Nome Completo</label>
            <div class="col-sm-6">
            <input type="text" name="name" value="{{$user->name}}" class="form-control @error('name') is-invalid @enderror">
            </div>
        </div>
    
        <div class="form-group row">
                    <label class="col-sm-2 col-from-label">Email</label>
                <div class="col-sm-6">
                    <input type="email" name="email" value="{{$user->email}}" class="form-control  @error('email') is-invalid @enderror">
            </div>
        </div>
    
        <div class="form-group row">
                    <label class="col-sm-2 col-from-label">Senha</label>
                <div class="col-sm-6">
                    <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror">
            </div>
        </div>
        <div class="form-group row">
                    <label class="col-sm-2 col-from-label">Repita sua senha</label>
                <div class="col-sm-6">
                    <input type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror">
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

