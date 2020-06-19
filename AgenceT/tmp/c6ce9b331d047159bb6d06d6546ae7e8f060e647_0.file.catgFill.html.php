<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-19 03:10:11
  from 'C:\xampp1\htdocs\AgenceT\views\catgFill.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eec2c93c56e65_92974911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6ce9b331d047159bb6d06d6546ae7e8f060e647' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\AgenceT\\views\\catgFill.html',
      1 => 1592536207,
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
function content_5eec2c93c56e65_92974911 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['titre']->value;?>
</title>
  <link rel="stylesheet"  href="/AgenceT/css/styleCatgFill.css">
	<?php $_smarty_tpl->_subTemplateRender('file:header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php $_smarty_tpl->_subTemplateRender('file:navbar.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<main class="mt-5 rgba(121, 85, 72, 0.1) rgba-brown-slight z-depth-1 my-5 p-5" >

<?php $_smarty_tpl->_assignInScope('counter', 0);
$_smarty_tpl->_assignInScope('counter0', 0);?>
  
<h1 class="font-weight-bold text-center dark-grey-text pb-2"><?php echo $_smarty_tpl->tpl_vars['catg_name']->value;?>
</h1>
  <hr class="w-header my-4">
 

<div class="row row-cols-1 row-cols-md-2">
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['act_noms']->value, 'act');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['act']->value) {
?>

 <div class="column col mb-4 ">
     <div class="card h-100">
    <!-- Card -->

      <!--Card image-->
        <img class="card-img-top " src="<?php echo $_smarty_tpl->tpl_vars['act']->value['act_img'];?>
"
          alt="Card image cap">

    <form action="ajouter_panier.php" method="post">
      <!--Card content-->
      <div class="card-body">
        <div class="titre-content">
        <!--Title-->
        <div class="main-titre"><h4 class="card-title nom"><?php echo $_smarty_tpl->tpl_vars['act']->value['act_nom'];?>
</h4><br></div>

        <aside class="sidbar"><h5 class="prix">A partir de  <strong><h3 class="text-info"><?php echo $_smarty_tpl->tpl_vars['act']->value['act_prix'];?>
 Dhs</h3></strong></h5><br/></aside>

        <div class="fix"></div>
        </div>
         <!--Text-->

        <div class="content">
         <div class="main"><p class="location card-text"><i class="fas fa-1x fa-map-marker-alt"></i>  <strong><?php echo $_smarty_tpl->tpl_vars['act']->value['act_location'];?>
</strong></p></div>
        
        <aside class="btn1"><button type="submit" class="btn btn-light-blue btn-rounded">Voir plus</button></aside>
        <div class="fix"></div>
        <input type="hidden"  name="id_act" value="<?php echo $_smarty_tpl->tpl_vars['act']->value['id_act'];?>
"></div>
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
