@extends('layouts.default')
@section('content')

  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h1 class="header center white-text">Our Services</h1>
          <h5 class="header col s12 light">We provide high quality services for your industry</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="images/background02.png" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">
      <h4 class="center">Service List</h4>
     <ul class="collapsible popout" data-collapsible="accordion">
         <li>
            <div class="collapsible-header"><i class="material-icons">filter_drama</i>Chemicals Supply Management</div>
            <div class="collapsible-body"><p>This is first section.</p></div>
         </li>
         <li>
            <div class="collapsible-header"><i class="material-icons">place</i>Cost Efficiency</div>
            <div class="collapsible-body"><p>This is second section.</p></div>
         </li>
         <li>
            <div class="collapsible-header"><i class="material-icons">whatshot</i>Delivery Management</div>
            <div class="collapsible-body"><p>This is third section.</p></div>
         </li>
         <li>
            <div class="collapsible-header"><i class="material-icons">filter_drama</i>Stock Management</div>
            <div class="collapsible-body"><p>This is first section.</p></div>
         </li>
         <li>
            <div class="collapsible-header"><i class="material-icons">place</i>Distribution Management</div>
            <div class="collapsible-body"><p>This is second section.</p></div>
         </li>
         <li>
            <div class="collapsible-header"><i class="material-icons">whatshot</i>Lab and Sample Management</div>
            <div class="collapsible-body"><p>This is third section.</p></div>
         </li>
         <li>
            <div class="collapsible-header"><i class="material-icons">whatshot</i>HSE Management</div>
            <div class="collapsible-body"><p>This is third section.</p></div>
         </li>
         <li>
            <div class="collapsible-header"><i class="material-icons">whatshot</i>Quality Management</div>
            <div class="collapsible-body"><p>This is third section.</p></div>
         </li>

      </ul>
    </div>
  </div>
@stop