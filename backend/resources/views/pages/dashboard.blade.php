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
              <td><a class="waves-effect wave-light btn modal-trigger" href="#show{{ $product->nama}}".>Show</a></td>
              
              <div id="show{{ $product->nama}}" class="modal">
                <div class="modal-content">
                  <div class="row">
                    <form class="col s12">
                      <div class="row">
                        <h4>{{$product->nama}}</h4>
                        <p>{{$product->deskripsi}}</p>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="modal-footer">
                   <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
                </div>
             </div>

              <td><a class="waves-effect wave-light btn" href="#edit{{ $product->nama}}">Edit</a>
              <div id="edit{{ $product->nama}}" class="modal">
                <div class="modal-content">
                  <div class="row">
                    <form class="col s12">
                      <h4>Edit Product</h4>
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
                    </form>
                  </div>
                </div>
                <div class="modal-footer">
                   <input type="submit" class="modal-action modal-close waves-effect waves-green btn-flat">
                </div>
             </div>

              <a class="waves-effect wave-light btn red" style="margin-left: 3px" href="#delete{{ $product->nama}}">Remove</a></td>
              <div id="delete{{ $product->nama}}" class="modal">
                <div class="modal-content">
                  <div class="row">
                    <form class="col s12">
                      <h4>Delete Product</h4>
                      <p>Are you sure you want to delete this product?</p>
                    </form>
                  </div>
                </div>
                <div class="modal-footer">
                   <input type="submit" class="modal-action modal-close waves-effect waves-green btn-flat">
                </div>
             </div>
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
              <td><a class="waves-effect wave-light btn" href="#show{{ $service->nama}}">Show</a></td>

              <div id="show{{ $service->nama}}" class="modal">
                <div class="modal-content">
                  <div class="row">
                    <form class="col s12">
                      <div class="row">
                        <h4>{{$service->nama}}</h4>
                        <p>{{$service->deskripsi}}</p>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="modal-footer">
                   <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
                </div>
             </div>

              <td><a class="waves-effect wave-light btn" href="#edit{{ $service->nama}}">Edit</a>
              <a class="waves-effect wave-light btn red" style="margin-left: 3px" href="#delete{{ $service->nama}}">Remove</a></td>

              <div id="edit{{ $service->nama}}" class="modal">
                <div class="modal-content">
                  <div class="row">
                   <form action="editService" method="post">
                   {{ csrf_field() }}
                      <div class="row">
                        <input type="hidden" name="service_name_edit" value="{{ $service->nama}}">
                        <div class="input-field col s12" >
                            <label for="service_desc_edit">Service Description</label>
                            <textarea id="service_desc_edit" name="service_desc_edit" class="materialize-textarea"></textarea> 
                        </div>
                        <div class="input-field col s12">
                            <input type="submit" class="btn">
                        </div>
                      </div>
                   </form>    
                  </div>
                </div>
              </div>

              <div id="delete{{ $service->nama}}" class="modal">
                <div class="modal-content">
                  <div class="row">
                   <form action="deleteService" method="post">
                   {{ csrf_field() }}
                      <div class="row">
                        <input type="hidden" name="service_name_delete" value="{{ $service->nama}}">
                        <p>Are you sure you want to remove this service?</p>
                      </div>
                      <button type="submit" class="waves-effect wave-light btn red">Remove</button>
                   </form>    
                  </div>
                </div>
              </div>
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
          <h4>Content Manager</h4><br>

          <table class="striped highlight responsive-table centered">
          <thead>
            <tr>
                <th>Content Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
          </thead>

          <tbody>
            
            @foreach ($contents as $content)
              <tr>
              <td>{{$content->nama_konten}}</td>
              <td><a class="waves-effect wave-light btn modal-trigger" href="#show{{ $content->nama_konten}}".>Show</a></td>
              
              <div id="show{{ $content->nama_konten}}" class="modal">
                <div class="modal-content">
                  <div class="row">
                    <form class="col s12">
                      <div class="row">
                        <h4>{{$content->nama_konten}}</h4>
                        <p>{{$content->konten}}</p>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="modal-footer">
                   <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
                </div>
              </div>

              <td><a class="waves-effect wave-light btn" href="#edit{{ $content->nama_konten}}">Edit</a></td>

                <div id="edit{{ $content->nama_konten}}" class="modal">
                  <div class="modal-content">
                    <div class="row">
                      <form action="editContent" method="post">
                        {{ csrf_field() }}
                        <div class="row">
                          <input type="hidden" name="content_name_edit" value="{{ $content->nama_konten}}">
                          <div class="input-field col s12">
                            <label for="content_desc_edit">Content Description</label>
                            <textarea id="content_desc_edit" name="content_desc_edit" class="materialize-textarea"></textarea> 
                          </div>
                          <div class="input-field col s12">
                            <input type="submit" class="btn">
                          </div>
                        </div>
                      </form>    
                    </div>
                  </div>
                </div>

            </tr>
            @endforeach
          
          </tbody>
        </table>

        </div>
      </div>
    </div>
  </section>
@stop