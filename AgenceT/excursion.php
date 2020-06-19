<?php
session_start();
include_once '_config.inc.php';


require_once('connexion.inc.php');
$pdo = connexion::getConnexion();

$noms_catg= array();
	$pdostat = $pdo->query("SELECT * FROM categorie");
	$pdostat->setFetchMode(PDO::FETCH_OBJ);
	foreach ($pdostat as $ligne){

		array_push($noms_catg, $ligne->nom_catg);	
	}
	

$tpl->assign('noms_catg',$noms_catg);
	
$titre = 'Exursions';
$tpl->assign('titre',$titre);


if(isset($_GET['idCatg'])){

$act_noms= array();
$act_imgs= array();
$act_prix= array();
$act_location= array();
$act_designation= array();
$i = 0;
	$pdostat = $pdo->query("SELECT * FROM activites WHERE id_catg=".$_GET['idCatg']);
	$pdostat->setFetchMode(PDO::FETCH_OBJ);
		foreach ($pdostat as $ligne){
		$act_noms[$i]['id_act'] = $ligne->id_act;	
		$act_noms[$i]['act_nom'] = $ligne->act_nom;
		$act_noms[$i]['act_img'] = $ligne->act_img;
		$act_noms[$i]['act_prix'] = $ligne->act_prix;
		$act_noms[$i]['act_location'] = $ligne->act_location;
		$act_noms[$i]['act_designation'] = $ligne->act_designation;
		$i++;
	}

	/*foreach ($pdostat as $ligne){
		array_push($act_noms, $ligne->act_nom);	
		array_push($act_imgs, $ligne->act_img);
		array_push($act_prix, $ligne->act_prix);
		array_push($act_location, $ligne->act_location);
		array_push($act_designation, $ligne->act_prix);
	}*/


	$pdostat = $pdo->query("SELECT nom_catg FROM categorie WHERE id_catg=".$_GET['idCatg']);
	$pdostat->setFetchMode(PDO::FETCH_OBJ);
	foreach ($pdostat as $ligne){
		$catg_name = $ligne->nom_catg;
		
	}
$tpl->assign('catg_name',$catg_name);



$tpl->assign('act_noms',$act_noms);
$tpl->assign('act_imgs',$act_imgs);
$tpl->assign('act_prix',$act_prix);
	$tpl->display('views/catgFill.html');
}
else{

$noms_catg= array();
	$pdostat = $pdo->query("SELECT * FROM categorie");
	$pdostat->setFetchMode(PDO::FETCH_OBJ);
	foreach ($pdostat as $ligne){

		array_push($noms_catg, $ligne->nom_catg);	
	}
	


$tpl->assign('noms_catg',$noms_catg);

$tpl->display('views/catgFill.html');}

?>