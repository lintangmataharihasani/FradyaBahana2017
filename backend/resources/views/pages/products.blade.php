@extends('layouts.default')
@section('content')
<div class="parallax-container valign-wrapper">
<div class="section no-pad-bot">
<div class="container">
<div class="row center">
  <h1 class="header center white-text">Our Products</h1>
  <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
</div>
</div>
</div>
<div class="parallax"><img src="images/product.jpg" alt="Unsplashed background img 2"></div>
</div>


<div class="container">
<div class="section">
<!--   Icon Section   -->
<h4 class="center">Product List</h4>

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
<a href="#!" class="secondary-content"><i class="material-icons">expand_more</i></a>
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