@extends('layouts.default')
@section('content')
<div id="index-banner" class="parallax-container">
  <h1 class="header center white-text">Our Products</h1>
  <h5 class="header col s12 light">{{$header_tagline}}</h5>
</div>
	
<div class="container">
<div class="section">
<!--   Icon Section   -->
<h4 class="center">Product List</h4>
	<form class="col s12" method="post" action="products">
	{{ csrf_field() }}
		<div class="row">
			<div class="input-field col s12 m4 l10">
				<input placeholder="Product name" id="product_name" name="product_name" type="text" class="validate">
	            <label for="product_name">Product Name</label>
			</div>
			<div class="input-field col s12 m4 l2">
				<input type="submit" value="Search" class="waves-effect wave-light btn"></input>
			</div>
		</div>
	</form>
</div>
</div>
<div class="container">

<br>
<div class="section">
@empty($pesan)
<ul class="collection">
@foreach ($products as $product)
<li class="collection-item">
							<div class="row" style="margin-bottom: -3px">
								<div class="col s1 m4 l1">
									<a href="details?product={{$product->nama}}" class="black-text"><img src="images/flask.png" alt="" class="" style="height:30px; margin-top: 10px;">
								</div>
								<div class="col s10 m4 l10">
									<span class="title" style="margin-top: 15px;"><h5>{{ $product->nama}}</h5></span></a>
								</div>
								<div class="col s1 m4 l1">
									<a href="details?product={{$product->nama}}" class="secondary-content">
										<img src="images/right-arrow.png" alt="" class="" style="height:20px; margin-top: 15px;">
									</a>
								</div>
							</div>
						</li>
@endforeach
</ul>
@endempty
@isset($pesan)
<div class="card-panel red white-text text-white lighten-2" style="height: 70px;">
	<div class="row">
		<div class="col s1 m4 l1">
			<img src="images/delete.png" alt="" style="height: 20px;" />
		</div>
		<div class="col s11 m4 l11">
			{{$pesan}}
		</div>
	</div>
</div>
@endisset
</div>
</div>
@stop