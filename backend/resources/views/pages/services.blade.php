@extends('layouts.default')
@section('content')

   <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <h1 class="header center white-text">Our Services</h1>
        <div class="row center">
          <h5 class="header col s12 light">{{$header_tagline}}</h5>
          <div class="col s12">
            <div class="row">
            </div>
          </div>
        </div><br><br>
      </div>
    </div>
    <div class="parallax"><img src="images/product.jpg" alt="Unsplashed background img 1"></div>
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
        <!-- <ul class="pagination">
     <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
     <li class="active"><a href="#!">1</a></li>
     <li class="waves-effect"><a href="#!">2</a></li>
     <li class="waves-effect"><a href="#!">3</a></li>
     <li class="waves-effect"><a href="#!">4</a></li>
     <li class="waves-effect"><a href="#!">5</a></li>
     <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul> -->
    </div>
    {{ $services->links() }}
  </div>
@stop