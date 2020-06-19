<?php
session_start();

include_once '_config.inc.php';

require 'fonctions_panier.php';

require_once('connexion.inc.php');

$pdo = connexion::getConnexion();

try{

$noms_catg= array();
	$pdostat = $pdo->query("SELECT * FROM categorie");
	$pdostat->setFetchMode(PDO::FETCH_OBJ);
	foreach ($pdostat as $ligne){

		array_push($noms_catg, $ligne->nom_catg);	
	}

$tpl->assign('noms_catg',$noms_catg);

$titre = 'Panier';
$tpl->assign('titre',$titre);

$tpl->display('views/existNom.html');


}catch(Exceeption $e){
	echo "ERREUR :".$e->getMessage();
}
?>