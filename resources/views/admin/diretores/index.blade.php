@extends('adminlte::page')

@section('title', 'Diretoria')
    
@section('content_header')
    <h1>Lista de Membros da mesa Diretora</h1>
<a href="{{route('diretor.create') }}" class="btn btn-sm btn-success">Adicionar Membros da mesa Diretora</a>
@endsection

@section('content')

<div class="card"> 
    <div class="card-body">    
<table class="table table-hover">
   <thead>    
    <tr>
        <th width="50px">ID</th>
        <th width="400">Nome</th>
        <th width="300">Partido</th>
        <th width="200">Ações</th>
    </tr>
</thead> 
<tbody>
    @foreach ($diretores as $diretor)
        <tr>
        <td>{{$diretor->id}}</td>
        <td>{{$diretor->name}}</td>
        <td>{{$diretor->broken}}</td>

        <td>
            <a href="" target="_blank" class="btn btn-sm btn-success">Ver</a>
            <a href="{{route ('diretor.edit',['diretor'=> $diretor->id]) }}" class="btn btn-sm btn-info">Editar</a>
                    <form class="d-inline" method="POST" action="{{route ('diretor.destroy',['diretor'=> $diretor->id])}}" onsubmit="return confirm('tem certeza que deseja excluir?')" >
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-sm btn-danger">Excluir</button>
                    </form>
                </td>
             </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
{{$diretores->links() }}
@endsection
