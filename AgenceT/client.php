<?php
		
session_start();

//session_destroy();
		/*unset($_SESSION['panier']);
		print_r($_SESSION);*/

include_once '_config.inc.php';

require 'fonctions_client.php';

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

$titre = 'Client';
$tpl->assign('titre',$titre);

if(isset($_POST['reservations'])){

		$nbr0 = count($_SESSION['client']['id_clt']);
		

		if ($nbr0 == 1) {

		$acts= array();
		$postss = array();
		$i = 0;
		$j = 0;

	for ($i=0; $i < count($_SESSION['client']['id_clt']); $i++) { 

					$postss[0]=$_SESSION['client']['id_clt'][$i];
					
	}

			$insertStat = $pdo->prepare('SELECT * FROM reservations WHERE id_clt= :id_clt');
			$insertStat->execute(array(
			':id_clt'=>$postss[0]	
			));

		$row=$insertStat->fetchAll();
		if(!$row){

			$tpl->display('views/wrongReservation.html');
		}else{
			$insertStat = $pdo->prepare('SELECT * FROM reservations WHERE id_clt= :id_clt');
			$insertStat->execute(array(
			':id_clt'=>$postss[0]	
			));

			$insertStat->setFetchMode(PDO::FETCH_OBJ);

				foreach ($insertStat as $ligne1){

				$acts[$j]['id_clt'] = $ligne1->id_clt;	
				$acts[$j]['act_nom'] = $ligne1->act_nom;
				$acts[$j]['nbrEnfants'] = $ligne1->nbrEnfants;
				$acts[$j]['nbrAdultes'] = $ligne1->nbrAdultes;
				$acts[$j]['act_date'] = $ligne1->act_date;
				$acts[$j]['montant_act'] = $ligne1->montant_act;
				
				$j++;
				}
$tpl->assign('acts',$acts);
		$tpl->display('views/espaceClient.html');
	}
}else{

	$tpl->display('views/obligCnx.html');

		}
}

$sesClt_valeurs= array();	

$nbr = count($_SESSION['client']['id_clt']);

if ($nbr == 1) {
	for ($i=0; $i < count($_SESSION['client']['id_clt']); $i++) { 

					$sesClt_valeurs[$i]['id_clt'] =$_SESSION['client']['id_clt'][$i];
					$sesClt_valeurs[$i]['nom'] =$_SESSION['client']['nom'][$i];
					$sesClt_valeurs[$i]['email'] =$_SESSION['client']['email'][$i];
	}

$tpl->assign('sesClt_valeurs',$sesClt_valeurs);
}

	if(isset($_POST['inscription'])){

		$posts = array();
		$posts[0]= $_POST['nom'];

		$posts[1]= $_POST['email'];

		$posts[2]= $_POST['tel'];

		$posts[3]= $_POST['pays'];

		$posts[4]= $_POST['adr'];

		$posts[5]= $_POST['pass'];

		$insertStat = $pdo->prepare('INSERT INTO client(nom,email,tel,pays,adresse,pass) VALUES(:nom,:email,:tel,:pays,:adresse,:pass)');
		$insertStat->execute(array(
			':nom'=>$posts[0],
			':email'=>$posts[1],
			':tel'=>$posts[2],
			':pays'=>$posts[3],
			':adresse'=>$posts[4],
			':pass'=>$posts[5]
		));

			$tpl->display('views/accueil.html');
	}

if(isset($_POST['login'])){
$posts = array();
		$posts[0]= $_POST['loginEmail'];
		$posts[1]= $_POST['loginPass'];
		$insertStat = $pdo->prepare('SELECT * FROM client WHERE email= :email AND pass= :pass');
		$insertStat->execute(array(
			':email'=>$posts[0],
			':pass'=>$posts[1]
		));

		$row=$insertStat->fetchAll();
		if(!$row){

			$tpl->display('views/wrongLogin.html');
		}else{
			
			creationLogin();
			$posts[0]= $_POST['loginEmail'];
			$posts[1]= $_POST['loginPass'];
			$insertStat = $pdo->prepare('SELECT * FROM client WHERE email= :email AND pass= :pass');
		$insertStat->execute(array(
			':email'=>$posts[0],
			':pass'=>$posts[1]
		));

			$insertStat->setFetchMode(PDO::FETCH_OBJ);
				foreach ($insertStat as $ligne){
					$posts[2] = $ligne->id;
	
					$posts[3] = $ligne->nom;
					
					$posts[4] = $ligne->email;
			
					$posts[5] = $ligne->tel;
		
					$posts[6] = $ligne->pays;

					$posts[7] = $ligne->adresse;

					ajouterClientSession($posts[2],$posts[3],$posts[4],$posts[5],$posts[6],$posts[7]);
				}

				$sesClt_valeurs= array();
				for ($i=0; $i < count($_SESSION['client']['id_clt']); $i++) {
					if (condition) {
					# code...
				}

					$sesClt_valeurs[$i]['nom'] =$_SESSION['client']['nom'][$i];
					$sesClt_valeurs[$i]['email'] =$_SESSION['client']['email'][$i];
					$sesClt_valeurs[$i]['tel'] =$_SESSION['client']['tel'][$i];
					$sesClt_valeurs[$i]['pays'] =$_SESSION['client']['pays'][$i];
					$sesClt_valeurs[$i]['adresse'] =$_SESSION['client']['adresse'][$i];

				}

				}

				$tpl->assign('sesClt_valeurs',$sesClt_valeurs);
				$tpl->display('views/accueil.html');
		
}


if(isset($_POST['deconnection'])){
session_destroy();

	$tpl->display('views/accueil.html');
}

}catch(Exceeption $e){
	echo "ERREUR :".$e->getMessage();
}

?>