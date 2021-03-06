@extends('layouts.default')

@section('content')
<div id="index-banner" class="parallax-container">
   
  <h1 class="header center white-text text-shadow">Fradya Bahana Innovation</h1>
  <h5 class="header col s12 light text-shadow">{{$header_tagline}}</h5>
    
</div>

<div id="services" class="grey lighten-5">
  <div class="container parallax-container black-text text-black">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="images/our-products.jpg" class="responsive-img" >
              <span class="card-title shadow-title text-shadow">Our Products</span>
            </div>
            <div class="card-content">
              <p>Find detailed informations about our high quality products</p>
            </div>
            <div class="card-action">
              <a href="products">Read More</a>
            </div>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="card" >
            <div class="card-image">
              <img src="images/gelaskimia.jpg" class="responsive-img">
              <span class="card-title shadow-title text-shadow">Our Services</span>
            </div>
            <div class="card-content">
              <p>We provide best quality services for your company</p>
            </div>
            <div class="card-action">
              <a href="services">Read More</a>
            </div>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="card" >
            <div class="card-image shadow-title">
              <img src="images/about-us.jpg" class="responsive-img">
              <span class="card-title text-shadow">Contact Us</span>
            </div>
            <div class="card-content">
              <p>Find out more about our contact here.</p>
            </div>
            <div class="card-action">
              <a href="about">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="about-home">
  <div class="container">
    <div class="row center">
        <h5 class="header col s12 light">{{$about}}</h5>
    </div>
  </div>  
</div>


<!-- <div class="grey lighten-5">
  <div class="container">
    <div class="section">
      <div class="row">
        <div class="col s12 center" id="about">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>About Us</h4>
          <p class="left-align light">{{$about}}</p>
        </div>
      </div>

    </div>
  </div>
</div> -->

@stop