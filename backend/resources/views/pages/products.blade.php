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
				<select name="product_category[]" id="product_category" multiple>
	                <option value="" disabled selected>Choose Category</option>
	                    @foreach($categories as $category)
	                <option value='{{$category->nama_kategori}}'>{{$category->nama_kategori}}</option>  
	                    @endforeach
	            </select>
	            <label for="product_category">Product Category</label>
			</div>
			<div class="input-field col s12 m4 l2">
				<input type="submit" class="waves-effect wave-light btn"></input>
			</div>
		</div>
	</form>
</div>
</div>

<div class="container">
<div class="section">
<ul class="collection">
@foreach ($products as $product)
<li class="collection-item avatar">
<img src="images/conveyor.png" alt="" class="circle">
<span class="title"><strong>{{ $product->nama}}</strong></span>
<p>
{{ $product->deskripsi}}
</p>
<a href="details?product={{$product->nama}}" class="secondary-content"><i class="material-icons">expand_more</i></a>
</li>

@endforeach


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
</div>
{{ $products->links() }}
</div>
@stop