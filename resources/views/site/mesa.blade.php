@extends('site.layout')

@section('content')

<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">

                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-4">

@foreach ($diretores as $diretor)

<div class="container">
    <div class="card-deck mb-3 text-center">
      <div class="card mb-4 box-shadow">
        <div class="card-header">

        <div class="card-body">
          <h1 class="card-title pricing-card-title">{{$diretor->name}}</h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Partido: {{$diretor->broken}}</li>
            <li>Descrição: {{$diretor->description}}</li>
            <li style= "width= 48" height="48">{!!$diretor->body!!}</li>
            <hr>
          </ul>
        </div>  
        </div>
      </div>
    </div>
    
@endforeach
