<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-15 22:55:01
  from 'C:\xampp1\htdocs\AgenceT\views\footer.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee7fc45073370_24616854',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4158936f7c749dd0aead73f258e2a62c5d8010ae' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\AgenceT\\views\\footer.html',
      1 => 1592261696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee7fc45073370_24616854 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--Footer-->
<footer>
<!-- Footer -->
<footer class="page-footer font-small rgba(0, 0, 0, 0.7) rgba-black-strong pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-6 mr-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mb-4">Qui somme nous?</h5>
        <p>Excursionmaroc.ma est un spécialiste des excursions et activités au Maroc pour individuels et groupes. Filiale de l'agence My Morocco Travel, agence de voyages franco-marocaine spécialiste du Maroc et agréée par l'Etat. </p>
        <p><a>MENTIONS</a> <a>LÉGALES CRÉDITS</a></p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Contact details -->
        <h5 class="font-weight-bold text-uppercase mb-4">Addresse</h5>

        <ul class="list-unstyled">
          <li>
            <p>
              <i class="fas fa-home mr-3"></i> Marrakech, Geliz, Maroc</p>
          </li>
          <li>
            <p>
              <i class="fas fa-envelope mr-3"></i> info@example.com</p>
          </li>
          <li>
            <p>
              <i class="fas fa-phone mr-3"></i> + 212 234 567 88</p>
          </li>
          <li>
            <p>
              <i class="fas fa-print mr-3"></i> + 212 234 567 89</p>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

        <!-- Social buttons -->
        <h5 class="font-weight-bold text-uppercase mb-4" >Follow Us</h5>

        <!-- Facebook -->
        <a type="button" class="btn-floating btn-fb">
          <i class="fab fa-facebook-f"></i>
        </a>
        <!-- Twitter -->
        <a type="button" class="btn-floating btn-tw">
          <i class="fab fa-twitter"></i>
        </a>
        <!-- Google +-->
        <a type="button" class="btn-floating btn-gplus">
          <i class="fab fa-google-plus-g"></i>
        </a>
        <!-- Dribbble -->
        <a type="button" class="btn-floating btn-dribbble">
          <i class="fab fa-dribbble"></i>
        </a>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://Maroc Travel.com/"> Maroc Travel.com</a>
  </div>
</footer>
<!-- Footer -->
</footer>
<!--Footer-->
  <!-- End your project here-->

  <!-- jQuery -->
  <?php echo '<script'; ?>
 type="text/javascript" src="js/jquery.min.js"><?php echo '</script'; ?>
>
  <!-- MDB core JavaScript -->
  <?php echo '<script'; ?>
 type="text/javascript" src="js/mdb.min.js"><?php echo '</script'; ?>
>
  <!-- Your custom scripts (optional) -->
  <?php echo '<script'; ?>
 type="text/javascript"><?php echo '</script'; ?>
>
   <?php echo '<script'; ?>
 type="text/javascript" src="http://maps.google.com/maps/api/js"><?php echo '</script'; ?>
>
    <!-- Bootstrap core JavaScript -->
  <?php echo '<script'; ?>
 type="text/javascript" src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
  <!-- Bootstrap tooltips -->
  <?php echo '<script'; ?>
 type="text/javascript" src="js/popper.min.js"><?php echo '</script'; ?>
>
  
   <?php echo '<script'; ?>
 src="/agence/ProjetVide/js/jquery.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/agence/ProjetVide/js/jquery.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="/agence/ProjetVide/js/bootstrap.min.js"><?php echo '</script'; ?>
>

  <!-- Google Map Settigns -->
  <?php echo '<script'; ?>
>
    //Regular map
    function regular_map(){
      var var_location = new google.maps.LatLng(31.644705, -8.020076);

      var var_mapoptions = {
        center: var_location,
        zoom:16
      };

      var var_map = new google.maps.Map(document.getElementById("map-container"),
        var_mapoptions);
      var var_maker = new google.maps.Marker({
position: var_location,
map:var_map,
title: "Marrakesh"
      });
    }
//Initialize maps
google.maps.event.addDomListener(window, 'load', regular_map);
  <?php echo '</script'; ?>
>

<?php }
}
