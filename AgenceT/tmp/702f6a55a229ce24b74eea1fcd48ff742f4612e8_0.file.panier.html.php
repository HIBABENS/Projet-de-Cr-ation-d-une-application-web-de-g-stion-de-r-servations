<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-17 23:30:40
  from 'C:\xampp1\htdocs\AgenceT\views\panier.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eeaa7a017ea01_01298524',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '702f6a55a229ce24b74eea1fcd48ff742f4612e8' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\AgenceT\\views\\panier.html',
      1 => 1592436636,
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
function content_5eeaa7a017ea01_01298524 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
  <title><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</title>
  <link rel="stylesheet"  href="/AgenceT/css/panier.css">
  <?php $_smarty_tpl->_subTemplateRender('file:header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender('file:navbar.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!--<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tpl']->value['session']['act_valeurs'], 'object');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['object']->value) {
echo $_smarty_tpl->tpl_vars['object']->value->getData();?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>-->

<main>
  <br>
  <br>
  <br>

  <div class="container my-5">
  
  <!--Section: Content-->
  <section class="dark-grey-text">

    <!-- Section heading -->
    <h1 class="text-center font-weight-bold mb-5">Panier</h1>
  <!-- Grid row -->
    <div class="row">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ses_valeurs']->value, 'act');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['act']->value) {
?>
      <div class="col-12 mb-4">
        <div class="card z-depth-0 bordered border-light">
          <div class="card-body p-0">
            <div class="row mx-0">
              <div class="col-md-8 grey lighten-4 rounded-left pt-4">
             
                <div class="container">
                <img class="img" src="<?php echo $_smarty_tpl->tpl_vars['act']->value['img'];?>
">
                <aside class="sidbar">
                <h5 class="font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['act']->value['act_nom'];?>
</h5><br/>
                <p class="font-weight-light text-muted mb-4"><h6>Date : <?php echo $_smarty_tpl->tpl_vars['act']->value['date'];?>
</h6></p>
                <p class="font-weight-light text-muted mb-4"><h6>Prix : (<?php echo $_smarty_tpl->tpl_vars['act']->value['act_prix'];?>
 x <?php echo $_smarty_tpl->tpl_vars['act']->value['nbrAdultes'];?>
ADULTES) + (<?php echo $_smarty_tpl->tpl_vars['act']->value['act_prix'];?>
 x <?php echo $_smarty_tpl->tpl_vars['act']->value['nbrEnfants'];?>
ENFANTS x 50%)</h6></p>
                </aside>
                <div class="fix"></div>
                </div>
              </div>

              <form method="post" action="/AgenceT/panier.php">
                <input type="hidden"  name="nom" value="<?php echo $_smarty_tpl->tpl_vars['act']->value['act_nom'];?>
">
              <div class="side">
                <p class="h1 font-weight-normal">Prix</p>
                <p class="h5 font-weight-light text-muted mb-4"><?php echo $_smarty_tpl->tpl_vars['act']->value['montant'];?>
 Dhs</p>
                 <input type="hidden"  name="actMontant" value="<?php echo $_smarty_tpl->tpl_vars['act']->value['montant'];?>
">

<div class="modal fade" id="modalSubscriptionForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">RETIRER</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <h1>Voulez vous vraiment retirer l'activité "<?php echo $_smarty_tpl->tpl_vars['act']->value['act_nom'];?>
" du panier?</h1>
          <input type="hidden"  name="nom" value="<?php echo $_smarty_tpl->tpl_vars['act']->value['act_nom'];?>
">
        </div>


      </div>
      <div class="modal-footer d-flex ">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">NON</button>
        <button name="retirer" class="btn btn-indigo">OUI</button>
      </div>
    </div>
  </div>
</div>

<div class="text-center">
  <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalSubscriptionForm">Retirer du panier</a>
</div>

             
              </form>


<aside>

              <form method="post" action="/AgenceT/panier.php">
                <input type="hidden"  name="nom" value="<?php echo $_smarty_tpl->tpl_vars['act']->value['act_nom'];?>
">
             

                  <div class="modal fade" id="modifier" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">

                        <div class="modal-header text-center">
                          <h4 class="modal-title w-100 font-weight-bold">Modifier</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>

                        <div class="modal-body mx-3">
                          <div class="md-form mb-5 text-center">
                            
                                    Date:
                              <input type="date" id="date" name="date" min="2020-06-01" max="2020-12-31" required>
                              <span class="validity"></span>
                              <input type="hidden"  name="nom" value="<?php echo $_smarty_tpl->tpl_vars['act']->value['date'];?>
">
                              
                              
                              <input type="hidden"  name="prix" value="<?php echo $_smarty_tpl->tpl_vars['act']->value['act_prix'];?>
"><br><br>

                                Nombre d'enfants: 
                              <select name="enf" class="mdb-select md-form colorful-select dropdown-primary" required> 
                                  <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 20+1 - (1) : 1-(20)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
                               <option><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</option>
                                   <?php }
}
?>
                              </select><br>

                                Nombre d'adultes: 
                              <select name="adte" class="mdb-select md-form colorful-select dropdown-primary" required> 
                                  <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 20+1 - (1) : 1-(20)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
                               <option><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</option>
                                   <?php }
}
?>
                              </select><br>

                              <input type="hidden"  name="nom" value="<?php echo $_smarty_tpl->tpl_vars['act']->value['act_nom'];?>
">
                          </div>
                        </div>

                        <div class="modal-footer d-flex ">
                          <button name="modifer" class="btn btn-indigo">Modifier</button>
                        </div>

                      </div>
                    </div>
                  </div>

                  <div class="text-center">
                    <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modifier">Modifier</a>
                  </div>

             
              </form>


              </div>

            </div>
          </div>
        </div>
      </div>
  </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<form method="post" action="panier.php">
      <div class="col-12 mb-4">
        <div class="card z-depth-0 bordered border-light">
          <div class="card-body p-0">
            <div class="row mx-0">
              <div class="col-md-8 grey lighten-4 rounded-left pt-4">
                <div class="container">
                <h1>TOTAL : </h1><br>
                <p class="h1 font-weight-normal"><?php echo $_smarty_tpl->tpl_vars['varG']->value;?>
 Dhs</p>
                </div>
           

 <input type="hidden"  name="nom" value="<?php echo $_smarty_tpl->tpl_vars['varG']->value;?>
">

 <button name="Valider" class="btn aqua-gradient btnC">Valider mon panier</button>
</form>




                
            </div>
 
          </div>
        </div>
      </div>
    </div>






    <!-- Grid row -->

  
  </section>
  <!--Section: Content-->


</div>


  </main>
<!--Main layout-->

<?php $_smarty_tpl->_subTemplateRender('file:footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html>
<?php }
}
