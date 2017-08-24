@extends('layouts.default')
@section('content')
 <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <h1 class="header center white-text">Our Products</h1>
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

<div class="parallax-container black-text text-darken-2">
<div class="container">
	<div class="section">
		<h4 class="center white-text text-darken-2">Product List</h4>
		<form class="col s12" method="post" action="products">
		{{ csrf_field() }}
			<div class="row">
				<div class="input-field col s12 m4 l10 ">
					<input placeholder="Product Name" id="product_name" name="product_name" type="text" style="margin-top: 30px;" class="validate white-text text-darken-2 searchLabel">
		            <label for="product_category" >Product Name</label>
				</div>
				<div class="input-field col s12 m4 l2 ">
					<input type="submit" value="Search" class="waves-effect wave-light btn" style="margin-top: 30px;"></input>
				</div>
			</div>
		</form>
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
				<a href="details?product={{$product->nama}}" class="secondary-content">
					<i class="material-icons">keyboard_arrow_right</i>
				</a>
			</li>
			@endforeach
	</div>
	<div class="row center">
	{{ $products->links() }}
	</div>
</div>
<div class="parallax"><img src="images/background03.png" alt="Unsplashed background img 1"></div>
</div>
	</form>
</div>
</div>
<div class="row center">
{{ $products->links() }}
</div>
@stop
</div>