<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-15 15:17:42
  from 'C:\xampp1\htdocs\AgenceT\views\existNom.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ee791167f2a43_90271785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31ede3aea59a8e4954d326d5c3b7feec38c47152' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\AgenceT\\views\\existNom.html',
      1 => 1592233957,
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
function content_5ee791167f2a43_90271785 (Smarty_Internal_Template $_smarty_tpl) {
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

  <br>
  <br>
  <br>

  <div class="container my-5">
  
  <!--Section: Content-->
  <section class="dark-grey-text">

    <!-- Section heading -->
    <h3 class="text-center font-weight-bold mb-5">Panier</h3>
    <a href="javascript:history.back()">retourner au catalogue </a>
    <a href="/AgenceT/panier.php">excurtion</a>

 <div class="row">
 <div class="col-12 mb-4">
        <div class="card z-depth-0 bordered border-light">
          <div class="card-body p-0">
            <div class="row mx-0">
              <div class="col-md-12 grey lighten-4 rounded-left pt-4 ">
                <div class="contVide text-center">
                  
                  <form method="post" action="/AgenceT/panier.php">
                      <div class="vide">
                      <h1>Vous avez deja reserver cette activité !</h1>
                      <br>
                      <br>

                      </div>
                      <aside class="btnCT">
                       <p><button name="show" class="  btn aqua-gradient">Mon panier</button></p>
                       </aside>
                       <div class="fixe"></div>
                  </form>

                </div>

              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
  <!--Section: Content-->


</div>

<?php $_smarty_tpl->_subTemplateRender('file:footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


</body>
</html>

<?php }
}
