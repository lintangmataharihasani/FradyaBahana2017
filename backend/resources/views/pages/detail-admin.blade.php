@extends('layouts.admin')
@section('content')

<section id="products-admin">
    <div class="container">
      <div style="padding: 60px;" class="card">
          <div class="row ">
          		<h3>{{$product}}</h3>

              <h5><strong>Description</strong></h5>
              <p>{{$deskripsi}}</p><br>

              <h5><strong>Available in</strong></h5>

              <p>State : {{$state}}</p>
              <p>Concentration : {{$concentration}}</p>
          		<a class="waves-effect wave-light btn red" href="dashboard">Back To Dashboard</a>

          	</div>
       </div>   
    </div>
  </section>
@stop