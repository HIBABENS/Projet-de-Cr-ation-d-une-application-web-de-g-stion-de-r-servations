<?php
session_start();
require_once 'panier.php';
$panier = new panier('produits');
$listeActivités = $panier->getPanier();
?>
<!DOCTYPE html>
<html>
<head>
  <title>{$titre}</title>
  <link rel="stylesheet"  href="/AgenceT/css/styleCatgFill.css">
  {include file='header.html'}
  {include file='navbar.html'}

<main>
  <br>
  <br>
  <br>

  <?php if(!$listeActivités){ ?>
<p>VOTRE PANIER EST VIDE</p>
  <?php  } else {?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nom produit</th>
      <th scope="col">Prix</th>
    </tr>
  </thead>
  <tbody>
        {$i=0}
    <?php foreach ($listeActivités as $act){ ?>
    <tr>
      <th scope="row">{$i = $i+1}</th>
      <td><?php print $act['id_act']?></td>
      <td><?php print $act['act_nom']?></td>
      <td><?php print $act['act_prix']?></td>
    </tr>
   <?php } ?>
  </tbody>
</table>
<?php } ?>
  </main>
<!--Main layout-->

{include file='footer.html'} 