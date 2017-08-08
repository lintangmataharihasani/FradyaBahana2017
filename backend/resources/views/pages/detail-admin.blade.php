@extends('layouts.admin')
@section('content')

<section id="products-admin">
    <div class="container">
      <div style="padding: 60px;" class="card">
          <div class="row ">
          		<h3>{{$product}}</h3>
          		<h5><strong>Available In</strong></h5>
          		<p>Concentration :
          		@foreach($concentration as $con)
          			{{$con->concentration}}<span>% ,</span>  
          		@endforeach
          		</p>
				<p>State :
          		@foreach($states as $state)
          			{{$state->state}}<span>,</span>  
          		@endforeach
          		</p>
          		<a class="waves-effect wave-light btn red" href="dashboard">Back To Dashboard</a>

          	</div>
       </div>   
    </div>
  </section>
@stop