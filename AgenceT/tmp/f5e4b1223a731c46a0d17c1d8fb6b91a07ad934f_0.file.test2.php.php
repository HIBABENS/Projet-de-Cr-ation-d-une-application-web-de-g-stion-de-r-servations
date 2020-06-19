<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-03 10:26:28
  from 'C:\xampp1\htdocs\AgenceT\test2.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ed77ad4006176_12000695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5e4b1223a731c46a0d17c1d8fb6b91a07ad934f' => 
    array (
      0 => 'C:\\xampp1\\htdocs\\AgenceT\\test2.php',
      1 => 1591179710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ed77ad4006176_12000695 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php
';?>
require_once('connexion.inc.php');
$pdo = connexion::getConnexion();
try{
$noms_catg= array();
	$pdostat = $pdo->query("SELECT * FROM categorie");
	$pdostat->setFetchMode(PDO::FETCH_OBJ);
	foreach ($pdostat as $ligne){

		array_push($noms_catg, $ligne->nom_catg);	
	}
	
	}catch (Exception $e) {
		echo "ERREUR :".$e->getMessage();
	}


$tpl->assign('noms_catg',$noms_catg);

$tpl->display('test.html');<?php }
}
