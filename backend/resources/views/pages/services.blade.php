@extends('layouts.default')
@section('content')

  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h1 class="header center white-text">Our Services</h1>
          <h5 class="header col s12 light">We provide high quality services for your industry</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="images/background02.png" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">
      <h4 class="center">Service List</h4>
     <ul class="collapsible popout" data-collapsible="accordion">
        @foreach ($services as $service)
         <li>
            <div class="collapsible-header"><img src="images/flasks.png" style="width: 30px;height: 30px; margin-top: 10px;" /><span class="pull-right">{{ $service->nama}}</span>               
            </div>
            <div class="collapsible-body"><p>{{ $service->deskripsi}}</p></div>
         </li>
      
         @endforeach
      </ul>
    </div>
  </div>
@stop