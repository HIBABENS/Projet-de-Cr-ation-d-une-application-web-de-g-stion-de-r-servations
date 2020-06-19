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

$titre = 'Comment ca Marche?';
$tpl->assign('titre',$titre);

$tpl->display('views/commentCaMarche.html');