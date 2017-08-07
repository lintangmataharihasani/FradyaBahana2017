@extends('layouts.admin')
@section('content')
<div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <h1 class="header center white-text">Fradya Bahana</h1>
        <div class="row center">
          <h5 class="header col s12 light">A reliable partner in total chemicals management</h5>
          <div class="col s12">
            <div class="row">
              <form>
                <div class="col s4"></div>
                <div class="col s4"></div>
                <div class="col s4"></div>
              </form>
            </div>
          </div>
        </div><br><br>
      </div>
    </div>
    <div class="parallax"><img src="images/background01.png" alt="Unsplashed background img 1"></div>
  </div>

  <div class="container">
    <div class="section">
      <h3>{{$product->nama}}</h3>
      <div class="row">
        <div class="col s12 m6 l3">
          <img src="images/gelaskimia.jpg" alt="images/gelaskimia.jpg" class="responsive-image" id="gambarProduk"/>   
        </div>
        <div class="col s12 m6 l9">
          <ul class="collection">
            <li class="collection-item">
              <h5><strong>Description</strong></h5>
              <p>{{$product->deskripsi}}</p><br>

              <h5><strong>Available in</strong></h5>

              @foreach($state_products as $state_product)
              <p>State : {{$state_product->state}}<br>
              @endforeach

              @foreach($concentration_products as $concentration_product)
              Concentration  : {{$concentration_product->concentration}}</p>   
              @endforeach     
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
@stop