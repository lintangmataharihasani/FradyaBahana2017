
<footer class="page-footer teal">
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">Fradya Bahana Innovation</h5>
        <p class="grey-text text-lighten-4">
          Plaza Oleos 5th Fl(Fortice), Jalan T.B. Simatupang Kav. 53 RT.2/RT.1, Pasar Minggu, Kota Jakarta Selatan, DKI Jakarta 12520
        </p>
      </div>
      <div class="col l3 s12">
        <h5 class="white-text">Links</h5>
        <ul>
          <li><a class="white-text" href="products">Products</a></li>
          <li><a class="white-text" href="services">Services</a></li>
          <li><a class="white-text" href="about">About</a></li>
        </ul>
      </div>
      <div class="col l3 s12">
        <h5 class="white-text">Connect</h5>
        <div class="row">
          <div class="col s12 m4 l3"><a href="http://facebook.com"><img class="responsive-img" style="height:25px;" src="images/logo_facebook.png" align="Fradya Bahana"></a></div>
          <div class="col s12 m4 l3"><a href="http://twitter.com"><img class="responsive-img" style="height:25px;" src="images/logo_twitter.png" align="Fradya Bahana"></a></div>
          <div class="col s12 m4 l3"><a href="http://google.com"><img class="responsive-img" style="height:25px;" src="images/instagram.png" align="Fradya Bahana" href="http://google.com"></a></div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container" style="font-size:10px;">
    <p>Made by <a class="brown-text text-lighten-5" href="http://materializecss.com">Materialize</a>. 
    Icons made by Flaticons. Copyright ©2017 Fradya Bahana Innovation, All Rights Reserved</p>
    </div>
  </div>
</footer>


<!--  Scripts-->
 <!--JS-->
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
      $('.modal').modal();

      $('#textarea1').trigger('autoresize');

      $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
      });

      $('select').material_select();
        
    });
  </script>