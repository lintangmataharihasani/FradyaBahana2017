@extends('layouts.admin')
@section('content')
<section id="products-admin">
    <div class="container">
      <div style="padding: 30px;" class="card">
          <div class="row center">
          <h4>Edit Product</h4><br>
          <a style="margin-bottom: 20px;" class="waves-effect waves-light btn red" href="#addProductModal" >Add new Product</a>
           <div id="addProductModal" class="modal">
              <div class="modal-content">
                <div class="row">
                  <form class="col s12">
                    <div class="row">
                      <h4>Add New Products</h4>
                      <div class="input-field col s12">
                        <input placeholder="ex: Diethanolamine" id="product_name" type="text" class="validate">
                        <label for="product_name">Product Name</label>
                      </div>
                      <div class="input-field col s12">
                            <select>
                              <option value="" disabled selected>Choose category....</option>
                              <option value="1">Option 1</option>
                              <option value="2">Option 2</option>
                              <option value="3">Option 3</option>
                            </select>
                        <label for="product_category">Product Category</label>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="modal-footer">
                <a class="waves-effect wave-light btn" href="#">Save</a>
              </div>
            </div>

          <table class="striped highlight responsive-table centered">
          <thead>
            <tr>
                <th>Product Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
          </thead>

          <tbody>
            
            @foreach ($products as $product)
              <tr>
              <td>{{$product->nama}}</td>
              <td><a class="waves-effect wave-light btn modal-trigger" href="#modal1">Show</a></td>
              <td><a class="waves-effect wave-light btn" href="#editProductModal">Edit</a>
             
              <a class="waves-effect wave-light btn red" style="margin-left: 3px" href="#deleteProduct">Remove</a></td>
           
            </tr>
            @endforeach
          
          </tbody>
        </table>
        <ul class="pagination">
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="active"><a href="#!">1</a></li>
            <li class="waves-effect"><a href="#!">2</a></li>
            <li class="waves-effect"><a href="#!">3</a></li>
            <li class="waves-effect"><a href="#!">4</a></li>
            <li class="waves-effect"><a href="#!">5</a></li>
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
   <section id="service-admin">
    <div class="container">
      <div style="padding: 30px;" class="card">
        <div class="row center">
          <h4>Edit Service</h4><br>
          <a style="margin-bottom: 20px;" href="#addServiceModal" class="waves-effect waves-red btn red">Add New Service</a>
          <div id="addServiceModal" class="modal">
              <div class="modal-content">
                <div class="row">
                  <form class="col s12" method="post" action="addService">
                  {{ csrf_field() }}
                    <div class="row">
                      <h4>Add New Service</h4>
                      <div class="input-field col s12">
                        <input placeholder="ex: Diethanolamine" id="service_name" name="service_name" type="text" class="validate">
                        <label for="service_name">Service Name</label>
                      </div>
                      <div class="input-field col s12">
                          <label for="service_desc">Service Description</label>
                          <textarea id="textarea1" class="materialize-textarea" name="service_desc" id="service_desc"></textarea>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <input type="submit" class="waves-effect wave-light btn"></input>
                    </div>
                  </form>
                </div>
              </div>            
            </div>

          <table class="striped highlight responsive-table centered">
          <thead>
            <tr>
                <th>Service Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
          </thead>

          <tbody>
            
            @foreach ($services as $service)
              <tr>
              <td>{{$service->nama}}</td>
              <td><a class="waves-effect wave-light btn" href="#">Show</a></td>
              <td><a class="waves-effect wave-light btn" href="#editServiceModal">Edit</a>
              <a class="waves-effect wave-light btn red" style="margin-left: 3px" href="#">Remove</a></td>
              </tr>
            @endforeach
            
          
          </tbody>
        </table>
        <ul class="pagination">
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="active"><a href="#!">1</a></li>
            <li class="waves-effect"><a href="#!">2</a></li>
            <li class="waves-effect"><a href="#!">3</a></li>
            <li class="waves-effect"><a href="#!">4</a></li>
            <li class="waves-effect"><a href="#!">5</a></li>
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div style="padding: 30px;" class="card">
        <div class="row center">
          <h4>Edit Content</h4><br>
          <a class="waves-effect wave-light btn" href="#">About Us</a>
          <a class="waves-effect wave-light btn" href="#">Company Bio</a>
        </div>
      </div>
    </div>
  </section>
@stop