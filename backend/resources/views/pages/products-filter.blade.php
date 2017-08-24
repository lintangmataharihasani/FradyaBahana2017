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
<div class="section">
<<<<<<< HEAD
=======
<h5>Menampilkan produk dengan kategori {{$kategori}}</h5>
>>>>>>> df28129c4978e22d49afef42b8497bcc0b3719b9
<br>
<ul class="collection">
@foreach ($products as $product)
<li class="collection-item avatar">
	<div class="row">
		<div class="col s12 m4 l1">
			<a href="details?product={{$product->nama}}" class="black-text"><img src="images/test-tube.png" alt="" class="responsive-img" style="height:30px; margin-top: 10px;">
		</div>
		<div class="col s12 m4 l11">
			<span class="title"><strong><h5>{{ $product->nama}}</h5></strong></span></a>
		</div>
	</div>
<p>
{{ $product->deskripsi}}
</p>
<a href="details?product={{$product->nama}}" class="secondary-content"><i class="material-icons">keyboard_arrow_right</i></a>
</li>

@endforeach
<<<<<<< HEAD
=======


<!-- </ul>
<ul class="pagination center">
<li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
<li class="active"><a href="">1</a></li>
<li class="waves-effect"><a href="#!">2</a></li>
<li class="waves-effect"><a href="#!">3</a></li>
<li class="waves-effect"><a href="#!">4</a></li>
<li class="waves-effect"><a href="#!">5</a></li>
<li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
</ul> -->
>>>>>>> df28129c4978e22d49afef42b8497bcc0b3719b9
</div>
</div>
@stop
