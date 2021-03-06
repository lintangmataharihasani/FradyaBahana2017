@extends('layouts.default')
@section('content')
<div id="index-banner" class="parallax-container">
  <h1 class="header center white-text">Our Services</h1>
  <h5 class="header col s12 light">{{$header_tagline}}</h5>
</div>

<div class="grey lighten-5">
  <div class="container">
    <div class="section">
      <h4 class="center">Service List</h4>
     <ul class="collapsible popout" data-collapsible="accordion">
        @foreach ($services as $service)
         <li>

            <div class="collapsible-header"><img src="images/support.png" style="width: 40px;height: 40px; margin-top: 10px;" ><span class="pull-right">{{ $service->nama}}</span></div>               
            <div class="collapsible-body"><p>{{ $service->deskripsi}}</p></div>
         </li>
         @endforeach
      </ul>
  </ul>
    </div>
    {{ $services->links() }}
  </div>
@stop
</div>