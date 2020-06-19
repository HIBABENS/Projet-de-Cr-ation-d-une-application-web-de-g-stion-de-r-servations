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

$fichier="contacts.txt";
			if(isset($_POST['contact'])){
				$nom =$_POST['nom'];
				$tel =$_POST['tel'];
				$email = $_POST['email'];
				$sujet = $_POST['sujet'];
				$msg = $_POST['msg'];

					
				$str = file_get_contents($fichier);
    			if($f=fopen($fichier,"a")){
      			    			if(!feof($f)){
   				    			$str.fwrite($f,(count(file($fichier))+1).'|'.  $nom.'|'.$email.'|'.$tel.'|'.$sujet.'|'.$msg.PHP_EOL);
   				    			 fclose($f);} 
  				} else {
    		   			 die("ouvertur du fichier <b>$fichier</b> échoué.");
    		   			}	
    		   			 
    		 }
				
$titre = 'Accueil';
$tpl->assign('titre',$titre);

$tpl->display('views/accueil.html');
