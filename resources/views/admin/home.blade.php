@extends('adminlte::page')

@section('plugins.Chartjs',true)
    


@section('title', 'Painel')


@section('content_header')

<div class="row">
    <div class="col-md-8">
        <h1>DashBoard</h1>
    </div>
    <div class="col-md-4">
        <form action="" method="GET" class="d-flex">
            <select onChange="this.form.submit()"name="interval" class="form-control">
                <option selected disabled>Selecione...</option>
                <option {{$dateTnterval ==1?'selected = "selected"':''}} value="1">Último dia</option>
                <option {{$dateTnterval ==7?'selected = "selected"':''}} value="7">Últimos 7 dias</option>
                <option {{$dateTnterval ==30?'selected = "selected"':''}} value="30">Últimos 30 dias</option>
                <option {{$dateTnterval ==60?'selected = "selected"':''}} value="60">Últimos 60 dias</option>
                <option {{$dateTnterval ==90?'selected = "selected"':''}} value="90">Últimos 90 dias</option>
                <option {{$dateTnterval ==120?'selected = "selected"':''}} value="120">Últimos 120 dias</option>
            </select>
        </form>
    </div>
</div>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-3">
           <div class="small-box bg-info">
                <div class="inner">
                <h3>{{$visitsCount}}</h3>
                    <p>Acessos</p>
                </div>
                <div class="icon">
                    <i class="far fa-fw fa-eye"></i>
                </div>
            </div> 
        </div>

        <div class="col-md-3">
            <div class="small-box bg-success">
                 <div class="inner">
                     <h3>{{$onlineCount}}</h3>
                     <p>Usuários</p>
                 </div>
                 <div class="icon">
                     <i class="far fa-fw fa-user"></i>
                 </div>
             </div> 
         </div>

        <div class="col-md-3">
            <div class="small-box bg-danger">
                 <div class="inner">
                     <h3>{{$pageCount}}</h3>
                     <p>Usuários Online</p>
                 </div>
                 <div class="icon">
                     <i class="far fa-fw fa-heart"></i>
                 </div>
             </div> 
         </div>

         <div class="col-md-3">
            <div class="small-box bg-warning">
                 <div class="inner">
                     <h3>{{$userCount}}</h3>
                     <p>Páginas</p>
                 </div>
                 <div class="icon">
                     <i class="far fa-fw fa-sticky-note"></i>
                 </div>
             </div> 
         </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Páginas mais Visitadas</h3>
            </div>
            <div class="card-body">
                <canvas id="pagePie"> </canvas>
            </div>
        </div>
    </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Sobre o Sistema</h3>
            </div>
            <div class="card-body">
                ...
            </div>
        </div>


        <script>
            window.onload = function(){
                let ctx = document.getElementById('pagePie').getContext('2d');
                window.pagePie = new Chart(ctx, {
                    type:'pie',
                    data:{
                        datasets:[{
                            data:{{$pageValues}},
                            backgroundColor:'#5bc0de'
                        }],
                        labels:{!!$pageValues!!}
                    },
                    options:{
                       responsive:true,
                       legend:{
                           display:false
                       } 
                    }
                });
            }
        </script>
@endsection
