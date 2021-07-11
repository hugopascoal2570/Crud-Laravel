@extends('adminlte::page')

@section('title', 'Leis')
    
@section('content_header')
    <h1>Lista das Leis</h1>
<a href="{{route('leis.create') }}" class="btn btn-sm btn-success">Adicionar Lei</a>
@endsection

@section('content')

<div class="card"> 
    <div class="card-body">    
<table class="table table-hover">
   <thead>    
    <tr>
        <th width="50px">ID</th>
        <th width="100px">Numero</th>
        <th width="100">Ano</th>
        <th width="550">Descrição</th>
        <th width="300">Data</th>
        <th width="250">Ações</th>
    </tr>
</thead> 
<tbody>
    @foreach ($leis as $lei)
        <tr>
        <td>{{$lei->id}}</td>
        <td>{{$lei->number}}</td>
        <td>{{$lei->year}}</td>
        <td>{{$lei->description}}</td>
        <td>{{$lei->data_publication}}</td>
        

        <td>
            <a href="" target="_blank" class="btn btn-sm btn-success">Ver</a>
            <a href="{{route ('leis.edit',['lei'=> $lei->id]) }}" class="btn btn-sm btn-info">Editar</a>
                    <form class="d-inline" method="POST" action="{{route ('leis.destroy',['lei'=> $lei->id])}}" onsubmit="return confirm('tem certeza que deseja excluir?')" >
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
{{$leis->links() }}
@endsection
