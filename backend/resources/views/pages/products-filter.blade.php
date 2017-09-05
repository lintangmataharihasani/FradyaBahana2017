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
<<<<<<< HEAD

<br>
=======
<div class="section">
@empty($pesan)
>>>>>>> a45d77acab19e6aa09090120695faa452670326a
<ul class="collection">
@foreach ($products as $product)
<li class="collection-item avatar">
	<div class="row">
		<div class="col s12 m4 l1">
			<a href="details?product={{$product->nama}}" class="black-text"><img src="images/flask.png" alt="" class="responsive-img" style="height:30px; margin-top: 10px;">
		</div>
		<div class="col s12 m4 l11">
			<span class="title"><strong><h5>{{ $product->nama}}</h5></strong></span></a>
		</div>
	</div>
<a href="details?product={{$product->nama}}" class="secondary-content"><i class="material-icons">keyboard_arrow_right</i></a>
</li>
@endforeach
<<<<<<< HEAD

=======
</ul>
@endempty
@isset($pesan)
<div class="card-panel red white-text text-white lighten-2" style="height: 70px;">
	<div class="row">
		<div class="col s1 m4 l1">
			<img src="images/delete.png" alt="" class="responsive-img" style="height: 20px;" />
		</div>
		<div class="col s11 m4 l11">
			{{$pesan}}
		</div>
	</div>
</div>
@endisset
</div>
>>>>>>> a45d77acab19e6aa09090120695faa452670326a
</div>
@stop
