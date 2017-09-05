@extends('layouts.admin')
@section('content')
 <div id="index-banner" class="parallax-container">
    <h1 class="header center text-shadow">Login</h1>  
    <div class="container">
    	<div class="row center">
    		<form action="login" method="post">
          {{csrf_field()}}
          <div class="row">
            <div class="input-field col s12">
              <input id="email" name="email" type="text" class="login-input validate margin-top-small">
              <label for="nama">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="password" name="password" type="password" class="login-input validate margin-top-small">
              <label for="nama">Password</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <button class="btn waves-effect waves-light" type="submit" name="action">Login
              </button>
            </div>
          </div>
        </form>
    	</div>
    </div>
    <div class="parallax"><img src="images/product.jpg" alt="Unsplashed background img 1"></div>
  </div>
@stop