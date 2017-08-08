@extends('layouts.default')
@section('content')
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <h1 class="header center white-text">About Us</h1>
        <div class="row center">
          <h5 class="header col s12 light">Fradya Bahana. A reliable partner in total chemicals management</h5>
          <div class="col s12">
            <div class="row">
            </div>
          </div>
        </div><br><br>
      </div>
    </div>
    <div class="parallax"><img src="images/gelaskimia.jpg" alt="Unsplashed background img 1"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>About Us</h4>
          <p class="left-align light">{{$about}}</p>
        </div>
      </div>

    </div>
  </div>

@stop
