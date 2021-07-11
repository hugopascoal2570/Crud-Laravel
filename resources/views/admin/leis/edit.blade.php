@extends('adminlte::page')

@section('title', 'Editar Lei')
    
@section('content_header')
    <h1>Editar Lei</h1>

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

<div class="card"> 

    <div class="card-body">
        <form action="{{route('leis.update',['lei'=>$leis->id])}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
            @method('PUT')
            @csrf 
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <div class="form-group row">
                <label class="col-sm-2 col-from-label">Número da Lei</label>
                <div class="col-sm-8">
                <input type="text" name="number" value="{{$leis->number}}" class="form-control @error('number') is-invalid @enderror">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-from-label">Ano da Lei</label>
                <div class="col-sm-8">
                <input type="text" name="year" value="{{$leis->year}}" class="form-control @error('year') is-invalid @enderror">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-from-label">Descrição</label>
                <div class="col-sm-8">
                <input type="text" name="description" value="{{$leis->description}}" class="form-control @error('description') is-invalid @enderror">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-from-label">Data da publicação</label>
                <div class="col-sm-8">
                <input type="text" name="data_publication" value="{{$leis->data_publication}}" class="form-control @error('data_publication') is-invalid @enderror">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-from-label"> Arquivos</label>
            <div class="col-sm-6">
            <input type="file" name="archive"  class="form-control bodyfield" value="{{$leis->archive}}>    
        </div>
    </div>


            <div class="form-group row">
                        <label class="col-sm-2 col-from-label"></label>
                    <div class="col-sm-8">
                        <input type="submit" value="Salvar" class="btn btn-success">
                </div>
            </div>
        </form>
    </div>
</div>



@endsection
