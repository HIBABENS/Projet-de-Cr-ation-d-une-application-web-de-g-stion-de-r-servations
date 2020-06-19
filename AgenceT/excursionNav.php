<?php
session_start();
include_once '_config.inc.php';


require_once('connexion.inc.php');
$pdo = connexion::getConnexion();

	
$titre = 'Exursions';
$tpl->assign('titre',$titre);
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


$tpl->display('views/excursion.html');}

?>