@extends('layouts.default')
@section('content')
<div id="index-banner" class="parallax-container">
  <h1 class="header center white-text">About Us</h1>
  <h5 class="header col s12 light">Fradya Bahana. A reliable partner in total chemicals management</h5>
</div>
<div id="about-profile" class="grey lighten-5">
  <div class="container">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <p class="left-align light black-text" id="about">{{$about}}</p>
        </div>
      </div>
    </div>
</div>
</div>
</div>
@stop
