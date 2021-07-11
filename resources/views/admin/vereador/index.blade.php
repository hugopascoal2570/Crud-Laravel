@extends('adminlte::page')

@section('title', 'Vereadores')
    
@section('content_header')
    <h1>Lista de Vereadores</h1>
<a href="{{route('vereador.create') }}" class="btn btn-sm btn-success">Adicionar Vereador</a>
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
    @foreach ($vereadores as $vereador)
        <tr>
        <td>{{$vereador->id}}</td>
        <td>{{$vereador->name}}</td>
        <td>{{$vereador->broken}}</td>

        <td>
            <a href="" target="_blank" class="btn btn-sm btn-success">Ver</a>
            <a href="{{route ('vereador.edit',['vereador'=> $vereador->id]) }}" class="btn btn-sm btn-info">Editar</a>
                    <form class="d-inline" method="POST" action="{{route ('vereador.destroy',['vereador'=> $vereador->id])}}" onsubmit="return confirm('tem certeza que deseja excluir?')" >
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
{{$vereadores->links() }}
@endsection
