@extends('layouts.default')
@section('content') 
<div id="index-banner" class="parallax-container">
   
  <h1 class="header center white-text text-shadow">Fradya Bahana Innovation</h1>
  <h5 class="header col s12 light text-shadow">{{$header_tagline}}</h5>
    
</div>

<div id="about" class="grey lighten-3">
    <div class="container">
    <div class="section">
      <h3>{{$product}}</h3>
      <div class="row">
        <div class="col s12 m6 l3">
          <img src="images/gelaskimia.jpg" alt="images/gelaskimia.jpg" class="responsive-image" id="gambarProduk"/>   
        </div>
        <div class="col s12 m6 l9">
          <ul class="collection">
            <li class="collection-item">
              <h5><strong>Description</strong></h5>
              <p style="text-align: justify;">{{$deskripsi}}</p><br>

              <h5><strong>Available in</strong></h5>
              
              <p>State : {{$state}}</p>
              <p>Concentration : {{$concentration}}</p>
              <p>Packaging : {{$packaging}}</p>
            </li>
          </ul>
          <a class="waves-effect wave-light btn red" href="products">Back To Product Page</a>
        </div>
      </div>
    </div>
  </div></div>


@stop
</div>
   