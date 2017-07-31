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
            <tr>
              <td>Diethanolamine</td>
              <td><a class="waves-effect wave-light btn modal-trigger" href="#modal1">Show</a></td>
              <td><a class="waves-effect wave-light btn" href="#editProductModal">Edit</a>
              <div id="editProductModal" class="modal">
              <div class="modal-content">
                <div class="row">
                  <form class="col s12">
                    <div class="row">
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
                    </div>
                  </form>
                </div>
              </div>
              <div class="modal-footer">
                <a class="waves-effect wave-light btn" href="#">Save</a>
              </div>
            </div>
              <a class="waves-effect wave-light btn red" style="margin-left: 3px" href="#deleteProduct">Remove</a></td>
              <!-- Modal Structure -->
              <div id="modal1" class="modal">
                <div class="modal-content">
                  <h4>Diethanolamine</h4>
                  <p>A bunch of text</p>
                </div>
                <div class="modal-footer">
                  <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
                </div>
              </div>
               <div id="deleteProduct" class="modal">
                <div class="modal-content">
                  <p>Are you sure you want to remove this product?</p>
                </div>
                <div class="modal-footer">
                  <a class="waves-effect wave-light btn" href="#">Back</a>
                  <a class="waves-effect wave-light btn red" style="margin-left: 3px" href="#">Remove</a>
                </div>
              </div>
            </tr>
            <tr>
              <td>Diethylethanolamine</td>
              <td><a class="waves-effect wave-light btn" href="#modal2">Show</a></td>
              <td><a class="waves-effect wave-light btn" href="#">Edit</a>
              <a class="waves-effect wave-light btn red" style="margin-left: 3px" href="#">Remove</a></td>
              <!-- Modal Structure -->
              <div id="modal2" class="modal">
                <div class="modal-content">
                  <h4>Diethylethanolamine</h4>
                  <p>A bunch of text</p>
                </div>
                <div class="modal-footer">
                  <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
                </div>
              </div>
            </tr>
            <tr>
              <td>Monoethanolamine</td>
              <td><a class="waves-effect wave-light btn" href="#modal3">Show</a></td>
              <td><a class="waves-effect wave-light btn" href="#">Edit</a>
              <a class="waves-effect wave-light btn red" style="margin-left: 3px" href="#">Remove</a></td>
              <!-- Modal Structure -->
              <div id="modal3" class="modal">
                <div class="modal-content">
                  <h4>Monoethanolamine</h4>
                  <p>A bunch of text</p>
                </div>
                <div class="modal-footer">
                  <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
                </div>
              </div>
            </tr>
            <tr>
              <td>N,N-Dimethylethanolamine S</td>
              <td><a class="waves-effect wave-light btn" href="#modal4">Show</a></td>
              <td><a class="waves-effect wave-light btn" href="#">Edit</a>
              <a class="waves-effect wave-light btn red" style="margin-left: 3px" href="#">Remove</a></td>
              <!-- Modal Structure -->
              <div id="modal4" class="modal">
                <div class="modal-content">
                  <h4>N,N-Dimethylethanolamine S</h4>
                  <p>A bunch of text</p>
                </div>
                <div class="modal-footer">
                  <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
                </div>
              </div>
            </tr>
            <tr>
              <td>Triethanolamine</td>
              <td><a class="waves-effect wave-light btn" href="#modal5">Show</a></td>
              <td><a class="waves-effect wave-light btn" href="#">Edit</a>
              <a class="waves-effect wave-light btn red" style="margin-left: 3px" href="#">Remove</a></td>
              <!-- Modal Structure -->
              <div id="modal5" class="modal">
                <div class="modal-content">
                  <h4>Triethanolamine</h4>
                  <p>A bunch of text</p>
                </div>
                <div class="modal-footer">
                  <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
                </div>
              </div>
            </tr>
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
                  <form class="col s12" method="post" action="/addService">
                  {{ csrf_field() }}
                    <div class="row">
                      <h4>Add New Service</h4>
                      <div class="input-field col s12">
                        <input placeholder="ex: Diethanolamine" id="product_name" type="text" class="validate">
                        <label for="product_name">Service Name</label>
                      </div>
                      <div class="input-field col s12">
                          <label for="product_category">Service Description</label>
                          <textarea id="textarea1" class="materialize-textarea"></textarea>
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
                <th>Service Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>Chemicals Supply Management</td>
              <td><a class="waves-effect wave-light btn" href="#">Show</a></td>
              <td><a class="waves-effect wave-light btn" href="#editServiceModal">Edit</a>
              <div id="editServiceModal" class="modal">
              <div class="modal-content">
                <div class="row">
                  <form class="col s12">
                    <div class="row">
                      <h4>Edit Service</h4>
                      <div class="input-field col s12">
                        <input placeholder="ex: Diethanolamine" id="product_name" type="text" class="validate">
                        <label for="product_name">Service Name</label>
                      </div>
                      <div class="input-field col s12">
                          <label for="product_category">Service Description</label>
                          <textarea id="textarea1" class="materialize-textarea"></textarea>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="modal-footer">
                <a class="waves-effect wave-light btn" href="#">Save</a>
              </div>
            </div>
              <a class="waves-effect wave-light btn red" style="margin-left: 3px" href="#">Remove</a></td>
            </tr>
            <tr>
              <td>Cost Efficiency</td>
              <td><a class="waves-effect wave-light btn" href="#">Show</a></td>
              <td><a class="waves-effect wave-light btn" href="#">Edit</a>
              <a class="waves-effect wave-light btn red" style="margin-left: 3px" href="#">Remove</a></td>
            </tr>
            <tr>
              <td>Delivery Management</td>
              <td><a class="waves-effect wave-light btn" href="#">Show</a></td>
              <td><a class="waves-effect wave-light btn" href="#">Edit</a>
              <a class="waves-effect wave-light btn red" style="margin-left: 3px" href="#">Remove</a></td>
            </tr>
            <tr>
              <td>Stock Management</td>
              <td><a class="waves-effect wave-light btn" href="#">Show</a></td>
              <td><a class="waves-effect wave-light btn" href="#">Edit</a>
              <a class="waves-effect wave-light btn red" style="margin-left: 3px" href="#">Remove</a></td>
            </tr>
            <tr>
              <td>Distribution Management</td>
              <td><a class="waves-effect wave-light btn" href="#">Show</a></td>
              <td><a class="waves-effect wave-light btn" href="#">Edit</a>
              <a class="waves-effect wave-light btn red" style="margin-left: 3px" href="#">Remove</a></td>
            </tr>
            <tr>
              <td>Lab and Sample Management</td>
              <td><a class="waves-effect wave-light btn" href="#">Show</a></td>
              <td><a class="waves-effect wave-light btn" href="#">Edit</a>
              <a class="waves-effect wave-light btn red" style="margin-left: 3px" href="#">Remove</a></td>
            </tr>
            <tr>
              <td>HSE Management</td>
              <td><a class="waves-effect wave-light btn" href="#">Show</a></td>
              <td><a class="waves-effect wave-light btn" href="#">Edit</a>
              <a class="waves-effect wave-light btn red" style="margin-left: 3px" href="#">Remove</a></td>
            </tr>
            <tr>
              <td>Quality Management</td>
              <td><a class="waves-effect wave-light btn" href="#">Show</a></td>
              <td><a class="waves-effect wave-light btn" href="#">Edit</a>
              <a class="waves-effect wave-light btn red" style="margin-left: 3px" href="#">Remove</a></td>
            </tr>
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