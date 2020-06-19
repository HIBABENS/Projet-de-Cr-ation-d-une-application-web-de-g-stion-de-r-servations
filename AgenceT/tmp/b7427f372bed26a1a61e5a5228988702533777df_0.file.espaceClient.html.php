<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-19 08:23:46
  from 'C:\xampp1\htdocs\AgenceT\views\espaceClient.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eec761260eb78_57405569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7427f372bed26a1a61e5a5228988702533777df' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\AgenceT\\views\\espaceClient.html',
      1 => 1592555022,
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
function content_5eec761260eb78_57405569 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
  <title><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</title>
   <?php $_smarty_tpl->_subTemplateRender('file:header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <?php $_smarty_tpl->_subTemplateRender('file:navbar.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main class="mt-5 rgba(121, 85, 72, 0.1) rgba-brown-slight z-depth-1 my-5 p-5" >

  
<h1 class="font-weight-bold text-center dark-grey-text pb-2">Espace Client</h1>
  <hr class="w-header my-4">
 

<div class="row row-cols-1 row-cols-md-2">
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['acts']->value, 'act');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['act']->value) {
?>

 <div class="column col mb-4 ">
     <div class="card h-100 text-center">
    <!-- Card -->


    <form action="ajouter_panier.php" method="post">
      <!--Card content-->
      <div class="card-body">
        <div class="titre-content">
        <!--Title-->
        <div class="main-titre"><h4 class="card-title nom text-info"><?php echo $_smarty_tpl->tpl_vars['act']->value['act_nom'];?>
</h4><br></div>
         <div ><h6 class="card-title nom ">Nombre d'enfants : <?php echo $_smarty_tpl->tpl_vars['act']->value['nbrEnfants'];?>
</h6><br></div>
         <div ><h6 class="card-title nom">Nombre d'adultes : <?php echo $_smarty_tpl->tpl_vars['act']->value['nbrAdultes'];?>
</h6><br></div>
         <div ><h6 class="card-title nom">Date : <?php echo $_smarty_tpl->tpl_vars['act']->value['act_date'];?>
</h6><br></div>
         <div ><h6 class="card-title nom">Montant de l'activité : <?php echo $_smarty_tpl->tpl_vars['act']->value['montant_act'];?>
 Dhs</h6><br></div>

      </div>
    </div>

       <!-- Card -->
    </form>
  </div>
  </div>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div>
  </main>

<?php $_smarty_tpl->_subTemplateRender('file:footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html><?php }
}
