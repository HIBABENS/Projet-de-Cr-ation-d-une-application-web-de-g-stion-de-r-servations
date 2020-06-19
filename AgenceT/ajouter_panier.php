<?php
session_start();
include_once '_config.inc.php';
require_once('connexion.inc.php');

$titre = 'Exursions';
$tpl->assign('titre',$titre);

$pdo = connexion::getConnexion();

if(isset($_POST['id_act'])){

$act_valeurs= array();
$i = 0;
	$pdostat = $pdo->query("SELECT * FROM activites WHERE id_act=".$_POST['id_act']);
	$pdostat->setFetchMode(PDO::FETCH_OBJ);
		foreach ($pdostat as $ligne){
		$act_valeurs[$i]['id_act'] = $ligne->id_act;
		$act_valeurs[$i]['act_img'] = $ligne->act_img;	
		$act_valeurs[$i]['act_nom'] = $ligne->act_nom;
		$act_valeurs[$i]['act_prix'] = $ligne->act_prix;
		$act_valeurs[$i]['act_location'] = $ligne->act_location;
		$act_valeurs[$i]['act_designation'] = $ligne->act_designation;
		$act_valeurs[$i]['act_map'] = $ligne->act_map;
		//var_dump($act_valeurs[$i]['act_prix']);
		//$panier1->add($act_valeurs[$i]['id_act']);
			//var_dump($panier1);
		//die('activité a bien ete ajouter a votre panier <a href="javascript:history.back()">retourner au catalogue </a>');
		$i++;}

$tpl->assign('act_valeurs',$act_valeurs);

$tpl->display('views/details_act.html');

}else{
	die("Vous n'avez pas selectionner une acticvité");
}

/*
include_once '_config.inc.php';
require_once 'panier.php' ;
require_once('connexion.inc.php');
$pdo = connexion::getConnexion();
	
$act_valeurs= array();
$i = 0;
	$pdostat = $pdo->query("SELECT * FROM activites WHERE id_act=".$_POST['id_act']);
	$ligne=$pdostat->setFetchMode(PDO::FETCH_OBJ);
	$id=$ligne->id_act;
	if ($id != null) {
		session_start();
		$act_valeurs = array(
		 $_SESSION['id_act'] = $ligne->id_act,
		 $_SESSION['act_nom'] = $ligne->act_nom,
		 $_SESSION['act_prix'] = $ligne->act_prix
		);
	}
	$tpl->assign('act_valeurs',$act_valeurs);
	$tpl->display('views/panier.html');
	/*	foreach ($pdostat as $ligne){
		$act_valeurs[$i]['id_act'] = $ligne->id_act;	
		$act_valeurs[$i]['act_nom'] = $ligne->act_nom;
		$act_valeurs[$i]['act_prix'] = $ligne->act_prix;
		$i++;
	}

$panier = new panier('produits');
$panier->set($_POST['id_act'], $act_valeurs);

echo "bjrs ";

$tpl->assign('act_valeurs',$act_valeurs);

$tpl->display('views/panier.html');

//redirection de mon panier
//header('Location: votre_panier.php')
//print_r($_POST);*/
?>