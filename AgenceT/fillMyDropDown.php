
<?php
session_start();
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

?>