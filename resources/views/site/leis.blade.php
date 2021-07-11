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


<div class="container">
    <div class="card-deck mb-3 text-center">
      <div class="card mb-4 box-shadow">
        <div class="card-header">
          @foreach ($leis as $lei)

          <div class="container">
              <div class="card-deck mb-3 text-center">
                <div class="card mb-4 box-shadow">
                  <div class="card-header">
          
                  <div class="card-body">
                    <h1 class="card-title pricing-card-title">{{$lei->number}}</h1>
                    <ul class="list-unstyled mt-3 mb-4">
                      <li>Partido: {{$lei->description}}</li>
                      <li>Descrição: {{$lei->year}}</li>
                      <img src="{{ url("leis/{$lei->archive}") }}" alt="{{ $lei->archive }}"/>
                      
                      <hr>
                    </ul>
                  </div>  
                  </div>
                </div>
              </div>
              
          @endforeach
        <div class="card-body">
          <h1 class="card-title pricing-card-title"></h1>
          <ul class="list-unstyled mt-3 mb-4">
            
            <hr>
          </ul>
        </div>  
        </div>
      </div>
    </div>
    
