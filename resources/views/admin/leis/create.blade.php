@extends('adminlte::page')

@section('title', 'Nova Lei')
    
@section('content_header')
    <h1>Nova Lei</h1>

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
        <form action="{{route('leis.store')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group row">
                <label class="col-sm-2 col-from-label">Ano da Lei</label>
                <div class="col-sm-6">
                <input type="text" name="year" id="year" value="{{old('year')}}" class="form-control @error('year') is-invalid @enderror">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-from-label">número da Lei</label>
                <div class="col-sm-6">
                <input type="text" name="number" id="number" value="{{old('number')}}" class="form-control @error('number') is-invalid @enderror">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-from-label">Descrição</label>
                <div class="col-sm-6">
                <input type="text" name="description" id="description" value="{{old('description')}}" class="form-control @error('description') is-invalid @enderror">
                </div>
            </div>


            <div class="form-group row">
                <label class="col-sm-2 col-from-label">Data da Publicação</label>
                <div class="col-sm-6">
                <input type="date" name="data_publication" id="data_publication" value="{{old('data_publication')}}" class="form-control @error('data_publication') is-invalid @enderror">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-from-label"> Arquivos</label>
            <div class="col-sm-6">
            <input type="file" name="archive" id="archive" class="form-control bodyfield">{{old('archive')}}
                
        </div>
    </div>
            
            <div class="form-group row">
                        <label class="col-sm-2 col-from-label"></label>
                    <div class="col-sm-6">
                        <input type="submit" value="cadastrar" class="btn btn-success">
                </div>
            </div>
        </form>
    </div>
</div>

</form>
@endsection
