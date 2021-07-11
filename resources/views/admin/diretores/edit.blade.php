@extends('adminlte::page')

@section('title', 'Editar Membro da Mesa Diretora')
    
@section('content_header')
    <h1>Editar Membro da Mesa Diretora</h1>

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
        <form action="{{route('diretor.update',['diretor'=>$diretor->id])}}" method="POST" class="form-horizontal">
            @method('PUT')
            @csrf 
            <div class="form-group row">
                <label class="col-sm-2 col-from-label">Nome</label>
                <div class="col-sm-8">
                <input type="text" name="name" value="{{$diretor->name}}" class="form-control @error('name') is-invalid @enderror">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-from-label">Partido</label>
                <div class="col-sm-8">
                <input type="text" name="broken" value="{{$diretor->broken}}" class="form-control @error('broken') is-invalid @enderror">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-from-label">Cargo</label>
                <div class="col-sm-8">
                <input type="text" name="office" value="{{$diretor->office}}" class="form-control @error('office') is-invalid @enderror">
                </div>
            </div>
    
            <div class="form-group row">
                <label class="col-sm-2 col-from-label">Foto </label>
            <div class="col-sm-8">
            <textarea name="body" class="form-control bodyfield">{{$diretor->body}}</textarea>       
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

<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=eijpmc7sdy2yipxuifg9fvebqq3l49ius24593k4ou1i4f0d"></script>
<script>
    tinymce.init({
        selector:'textarea.bodyfield',
        height:300,
        menubar:false,
        plugins:['link','table','image','autoresize','lists'],
        toolbar:'undo redo | formatselect | bold italic backcolor | media image | alignleft aligncenter alignright alignjustify | table| link image | Abullist numlist | removeformat',
        content_css:[
            '{{asset('assets\css\content.css')}}'
        ],
        images_upload_url:'{{route('imageupload')}}',
        images_upload_credentials:true
    });
</script>


@endsection
