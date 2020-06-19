<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-19 05:25:25
  from 'C:\xampp1\htdocs\AgenceT\views\navbar.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eec4c452fe969_62130970',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9071fb94f4908c1a778771655bb7e322e34e5f54' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\AgenceT\\views\\navbar.html',
      1 => 1592544320,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eec4c452fe969_62130970 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--navBar-->
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Maroc Travel</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/AgenceT/accueil.php">ACCUEIL</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/AgenceT/quiSommeNous.php">QUI SOMME NOUS?</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/AgenceT/commentCaMarche.php">COMMENT CA MARCHE</a>
    </li>

        <li class="nav-item dropdown">
          <a href="/AgenceT/excursion.php" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">EXURSIONS</a>

          <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['noms_catg']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>

            
            <a class="dropdown-item" href="/AgenceT/excursion.php?idCatg=<?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
" name="Culture"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</a>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </div>
        
        </li>

  </ul>
<ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item">
        <form method="post" action="panier.php">
          <button name="show" class="btn btn-primary"><i class="fa fa-shopping-cart mr-1"></i> Panier</button>
         
        </form>
      </li>
     
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-default"
          aria-labelledby="navbarDropdownMenuLink-333">
          <a href="" class="dropdown-item" data-toggle="modal" data-target="#Connection">Connection</a>
          <a href="" class="dropdown-item" data-toggle="modal" data-target="#Deconnection">Deconnection</a>
          <a href="" class="dropdown-item" data-toggle="modal" data-target="#Inscription">Inscription</a>
          <form  action="client.php" method="post">
          <button href="" class="dropdown-item"  name="reservations">Espace Client</button>
        </form>
        </div>
      </li>
    </ul>

</nav>

          
<form  action="client.php" method="post">
<div class="modal fade" id="Connection" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Connection</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">

        <div class="md-form mb-4">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input name="loginEmail" type="email" id="Votre email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Votre email">Votre email</label>
        </div>

         <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input name="loginPass" name="pass" type="password" id="orangeForm-pass" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Votre password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button name="login" class="btn btn-indigo">Login <i class="fas fa-paper-plane-o ml-1"></i></button>
      </div>
    </div>
  </div>
</div>
</form>
          
  
<form  action="client.php" method="post">
<div class="modal fade" id="Deconnection" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Deconnection</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
       <h1>Voulez vraiment vous deconnecter?</h1>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button name="deconnection" class="btn btn-indigo">OUI </button>
         <button type="button" class="btn btn-secondary" data-dismiss="modal">NON</button>
      </div>
    </div>
  </div>
</div>
</form>
          
<form  action="client.php" method="post">
<div class="modal fade" id="Inscription" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Inscrivez vous </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input name="nom" type="text" id="Votre nom" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Votre nom">Votre nom</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input name="email" type="email" id="Votre email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Votre email">Votre email</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-phone-alt prefix grey-text"></i>
          <input name="tel" type="text" id="Votre téléphone" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Votre téléphone">Votre téléphone</label>
        </div>

        <div class="md-form mb-4">
          <i class="fa fa-globe prefix grey-text"  aria-hidden="true"></i>       
          <input name="pays" type="text" id="Votre pays" class="form-control validate">
          <label data-error="wrong" data-success="right" for="Votre pays">Votre pays</label>
        </div>

        <div class="md-form mb-4">
          <i class="fa fa-map-marker prefix grey-text" aria-hidden="true"></i>
           <textarea name="adr" id="Votre adresse" class="form-control md-textarea" rows="3"></textarea>
          <label data-error="wrong" data-success="right" for="Votre adresse">Votre adresse</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input name="pass" type="password" id="orangeForm-pass" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-indigo" name="inscription">Valider <i class="fas fa-paper-plane-o ml-1"></i></button>
      </div>
    </div>
  </div>
</div>
</form>
<!--/.Navbar--><?php }
}
