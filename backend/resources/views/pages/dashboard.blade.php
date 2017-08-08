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

                  <form class="col s12" method="post" action="addProduct">
                  {{ csrf_field() }}
                    <div class="row">
                      <h4>Add New Product</h4>
                      <div class="input-field col s12">
                        <input required placeholder="ex: Diethanolamine" id="product_name" name="product_name" type="text" class="validate">
                        <label for="product_name">Product Name</label>
                      </div>
                      <div class="input-field col s12">
                        <select name="product_category[]" id="product_category" multiple>
                          <option value="" disabled selected>Choose Category</option>
                          @foreach($categories as $category)
                          <option value='{{$category->nama_kategori}}'>{{$category->nama_kategori}}</option>  
                          @endforeach
                        </select>
                        <label for="product_category">Product Category</label>
                      </div>
                      <div class="input-field col s12">
                        <input placeholder="contoh: Liquid, Solid, Gas (Harap pisahkan antar state dengan ', ' dan awali dengan huruf kapital)" id="product_state" name="product_state" type="text" class="">
                        <label for="product_state">State</label>
                      </div>
                      <div class="input-field col s12">
                        <input placeholder="contoh: 50%, 75% (Harap pisahkan antar concentration dengan ', ' dan akhiri dengan '%')" id="product_concentration" name="product_concentration" type="text" class="">
                        <label for="product_concentration">Concentration</label>
                      </div>
                      <div class="input-field col s12">
                          <label for="product_desc">Description</label>
                          <textarea id="textarea1" class="materialize-textarea" name="product_desc" id="product_desc"></textarea>
                      </div>
                    
                    </div>
                    <div class="modal-footer">
                      <input type="submit" class="waves-effect wave-light btn"></input>
                    </div>
                  </form>
                </div>
              </div>          
              </div>        
            </div>

          <table class="striped highlight responsive-table centered">
          <thead>
            <tr>
                <th>Product Name</th>
                <th>Detail</th>
                <th>Action</th>
            </tr>
          </thead>

          <tbody>
            
            @foreach ($products as $product)
              <tr>
              <td><strong>{{$product->nama}}</strong></td>
              <td><a class="waves-effect wave-light btn modal-trigger" href="detail-admin?product={{$product->nama}}".>Show Detail</a></td>
              <td><a class="waves-effect wave-light btn" href="#edit{{ $product->nama}}">Edit</a>
              <div id="edit{{ $product->nama}}" class="modal">
                <div class="modal-content">
                  <div class="row">
                    <form class="col s12" action="editProduct" method="post">
                      {{ csrf_field() }}
                      <h4>Edit Product</h4>
                      <div class="input-field col s12">
                        <input id="product_name" name="nama" type="hidden" value="{{$product->nama}}">
                        <blockquote>Harap Mengisi Data Produk Secara Lengkap</blockquote>
                      </div>
                      <!--<div class="input-field col s12">
                        <select name="kategori" id="product_category" multiple>
                          <option value="" disabled selected>Silahkan pilih kategori produk</option>
                          <option value="Industrial Chemicals">Industrial Chemicals</option>
                          <option value="Water Treatment Chemicals">Water Treatment Chemicals</option>
                          <option value="Oil Field Chemicals">Oil Field Chemicals</option>
                          <option value="Electronic Chemicals">Electronic Chemicals</option>
                          <option value="Agro Chemicals">Agro Chemicals</option>
                          <option value="Cleaning Chemicals">Cleaning Chemicals</option>
                          <option value="Resin, Adhesive, Paint, and Coating Chemicals">Resin, Adhesive, Paint, and Coating Chemicals</option>
                          <option value="Fine Chemicals">Fine Chemicals</option>
                          <option value="Construction Chemicals">Construction Chemicals</option>
                          <option value="Food and Feed Chemicals">Food and Feed Chemicals</option>
                          <option value="Auxiuliary Chemicals">Auxiuliary Chemicals</option>
                          <option value="Specialty Chemicals">Specialty Chemicals</option>
                        </select>
                        <label for="product_category">Product Category</label>
                      </div>-->
                      <div class="input-field col s12">
                        <textarea id="deskripsi" name="deskripsi" class="materialize-textarea"></textarea> 
                        <label for="deskripsi">Description</label>
                      </div>
                      <div class="input-field col s12">
                        <input placeholder="ex: Liquid" id="state" name="state" type="hidden" value="{{$product->state}}" class="validate">
                      </div>
                      <div class="input-field col s12">
                        <input placeholder="ex: 70" id="concentration" name="concentration" type="hidden" value="{{$product->concentration}}" class="validate">
                      </div>
                      <div class="modal-footer">
                         <input type="submit" class="modal-action modal-close waves-effect waves-green btn-flat">
                      </div>
                    </form>
                  </div>
                </div>

             </div>

              <a class="waves-effect wave-light btn red" style="margin-left: 3px" href="#delete{{ $product->nama}}">Remove</a></td>
              <div id="delete{{ $product->nama}}" class="modal">
                <div class="modal-content">
                  <div class="row">
                   <form action="deleteProduct" method="post">
                   {{ csrf_field() }}
                      <div class="row">
                        <div class="container">
                          <input type="hidden" name="product_name_delete" value="{{ $product->nama}}">
                          <p>Are you sure you want to remove this service?</p>
                           <button type="submit" class="waves-effect wave-light btn red">Remove</button>
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
                        <input type="hidden" name="service_name_delete" value="{{ $service->nama}}">
                        <div class="container row left" style="margin-bottom: 12px;">
                          <div class="row center">
                            <div class="col s12 m4 l2">
                              <i class="red-text medium material-icons">error_outline</i> 
                            </div>
                            <div class="col s12 m4 l10">
                              <h5 class="modal-content-text" id="modal-content-text">Are you sure you want to remove this service?</h5>
                            </div>
                          </div>
                        </div><br><br><br><br>
                        <div class="modal-footer">
                           <a class="waves-effect wave-light btn modal-action modal-close" href="#!">Close</a>
                           <button type="submit" class="waves-effect wave-light btn red grey-text text-lighten-5">Remove</button>
                        </div>
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