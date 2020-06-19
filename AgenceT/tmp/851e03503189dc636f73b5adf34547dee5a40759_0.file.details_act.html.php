<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-19 04:14:49
  from 'C:\xampp1\htdocs\AgenceT\views\details_act.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eec3bb95cb7a1_23861075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '851e03503189dc636f73b5adf34547dee5a40759' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\AgenceT\\views\\details_act.html',
      1 => 1592539976,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
    'file:navbar.html' => 1,
    'file:footer.html' => 1,
  ),
),false)) {
function content_5eec3bb95cb7a1_23861075 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>
session_start();
<?php echo '?>';?>

<!DOCTYPE html>
<html>
<head>
  <title><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</title>
  <link rel="stylesheet"  href="/AgenceT/css/details_act.css">
  <?php $_smarty_tpl->_subTemplateRender('file:header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender('file:navbar.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<br>
<br>
  <div class="container my-5">

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['act_valeurs']->value, 'act');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['act']->value) {
?>
  <!--Section: Content-->
  <section class="text-center">

    <!-- Grid row -->
    <div class="row">

      <div class="col-lg-8 col-md-12 mb-4">

        <!-- Pricing card -->
        <div class="card pricing-card ">

          <!-- Price -->
          <div class="peach-gradient rounded-top white-text">
            <h2 class="option aprtNom"><?php echo $_smarty_tpl->tpl_vars['act']->value['act_nom'];?>
</h2>
          </div>

          <!-- Features -->
          <div class=" striped orange-striped card-background px-5">

            <h2 class="my-4 pb-3 prt">Presentation</h2>

                <p><?php echo $_smarty_tpl->tpl_vars['act']->value['act_designation'];?>
</p>
        <i class="fas fa-2x fa-clock"></i><p>
<h6>DURÉE:</h6>
de 09h00 à 12h00 / 14h30 à 17h30</p>

			<i class="fas fa-2x fa-map-marker-alt"></i><br>
				<!-- Button trigger modal -->
<a class="btn btn-primary peach-gradient orange-striped" data-toggle="modal" data-target="#exampleModalCenter">
Ou?
</a><br>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">

  <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
  <div class="modal-dialog modal-dialog-centered" role="document">


    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ou se situe l'activité precisemant?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	
       <!--Google map-->
      <div id="<?php echo $_smarty_tpl->tpl_vars['act']->value['id_act'];?>
" class="z-depth-1-half map-container-6" style="height: 400px">
        <iframe src="https://maps.google.com/maps?q=new%20delphi&t=&z=13&ie=UTF8&iwloc=&output=embed"
          frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
          </div>
          <!-- Features -->

        </div>
        <!-- Pricing card -->

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-4 col-md-6 mb-4">

        <!-- Pricing card -->
        <div class="card pricing-card ">

 	<form method="post" action="/AgenceT/panier.php">
          <!-- Price -->
          <div class="purple-gradient rounded-top white-text">
            <h2 class="option aprt" >A partir de <?php echo $_smarty_tpl->tpl_vars['act']->value['act_prix'];?>
 Dhs</h2>
          </div>

<input type="hidden"  name="prix" value="<?php echo $_smarty_tpl->tpl_vars['act']->value['act_prix'];?>
">
          <div>
          <div class="ADULTES">
          <p>ADULTES <br><select name="adt" class="mdb-select md-form colorful-select dropdown-primary" required> 
          	
          	<?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 100+1 - (1) : 1-(100)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
   			 <option><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</option>
			<?php }
}
?>
          </select></p>
          </div>
          <div class="ENFANTS">

          <p>ENFANTS <br><select name="enf" class="mdb-select md-form colorful-select dropdown-primary" required> 
          
          	<?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 20+1 - (0) : 0-(20)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 0, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
   			 <option><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</option>
			<?php }
}
?>
          </select></p>
          </div>
     	 </div>
<input type="hidden"  name="id_act" value="<?php echo $_smarty_tpl->tpl_vars['act']->value['id_act'];?>
">

     	 <div>
  <div>
    <label for="date">Date:</label>
    <input type="date" id="date" name="date" min="2020-06-01" max="2020-12-31" required>
    <span class="validity"></span>
  </div>
 	 </div>

            <button name="RESERVER" class="mb-3 mt-3 btn purple-gradient btn-rounded">RESERVER</button>

          </div>
          <!-- Features -->
</form>
        </div>
        <!-- Pricing card -->

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </section>
  <!--Section: Content-->


</div>

  <?php $_smarty_tpl->_subTemplateRender('file:footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

  <?php echo '<script'; ?>
 type="text/javascript">
  	 //Regular map
    function regular_map<?php echo $_smarty_tpl->tpl_vars['act']->value['id_act'];?>
(){
      var var_location = new google.maps.LatLng(<?php echo $_smarty_tpl->tpl_vars['act']->value['act_map'];?>
);

      var var_mapoptions = {
        center: var_location,
        zoom:16
      };

      var var_map = new google.maps.Map(document.getElementById("<?php echo $_smarty_tpl->tpl_vars['act']->value['id_act'];?>
"),
        var_mapoptions);
      var var_maker = new google.maps.Marker({
position: var_location,
map:var_map,
title: "Marrakesh"
      });
    }
//Initialize maps
google.maps.event.addDomListener(window, 'load', regular_map<?php echo $_smarty_tpl->tpl_vars['act']->value['id_act'];?>
);
  <?php echo '</script'; ?>
>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</body>
</html><?php }
}
