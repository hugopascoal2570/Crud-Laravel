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

    @foreach ($vereadores as $vereador)

<div class="container">
    <div class="card-deck mb-3 text-center">
      <div class="card mb-4 box-shadow">
        <div class="card-header">

        <div class="card-body">
          <h1 class="card-title pricing-card-title">{{$vereador->name}}</h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Partido: {{$vereador->broken}}</li>
            <li>Descrição: {{$vereador->description}}</li>
            <li style= "width= 48" height="48">{!!$vereador->body!!}</li>
            <hr>
          </ul>
        </div>  
        </div>
      </div>
    </div>
    
@endforeach