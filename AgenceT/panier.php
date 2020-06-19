<?php
session_start();

		/*unset($_SESSION['panier']);
		print_r($_SESSION);*/

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

$varG = 0;
	if(isset($_POST['show'])){

$ses_valeurs= array();	


$nbrActivités = count($_SESSION['panier']['act_nom']);

			if ($nbrActivités <= 0) {
				
			$tpl->display('views/vide.html');

			}else{


			for ($i=0; $i < count($_SESSION['panier']['act_nom']); $i++) { 

					$ses_valeurs[$i]['id_act'] =$_SESSION['panier']['id_act'][$i];
					$ses_valeurs[$i]['act_nom'] =$_SESSION['panier']['act_nom'][$i];
					$ses_valeurs[$i]['nbrEnfants'] =$_SESSION['panier']['nbrEnfants'][$i];
					$ses_valeurs[$i]['nbrAdultes'] =$_SESSION['panier']['nbrAdultes'][$i];
					$ses_valeurs[$i]['act_prix'] =$_SESSION['panier']['act_prix'][$i];
					$ses_valeurs[$i]['date'] =$_SESSION['panier']['date'][$i];
					$ses_valeurs[$i]['img'] =$_SESSION['panier']['img'][$i];

					if ($_SESSION['panier']['nbrEnfants'][$i]=='ENFANTS'){
						$ses_valeurs[$i]['montant'] =($_SESSION['panier']['act_prix'][$i]*0.5)+($_SESSION['panier']['act_prix'][$i]*$_SESSION['panier']['nbrAdultes'][$i]);

					$var =($_SESSION['panier']['act_prix'][$i]*0.5)+($_SESSION['panier']['act_prix'][$i]*$_SESSION['panier']['nbrAdultes'][$i]);

					}elseif ($_SESSION['panier']['nbrAdultes'][$i]=='ADULTES') {
						$ses_valeurs[$i]['montant'] =($_SESSION['panier']['act_prix'][$i]*0.5)*$_SESSION['panier']['nbrEnfants'][$i]+($_SESSION['panier']['act_prix'][$i]);

					$var =($_SESSION['panier']['act_prix'][$i]*0.5)*$_SESSION['panier']['nbrEnfants'][$i]+($_SESSION['panier']['act_prix'][$i]);
					
					}else{

					$ses_valeurs[$i]['montant'] =($_SESSION['panier']['act_prix'][$i]*0.5)*$_SESSION['panier']['nbrEnfants'][$i]+($_SESSION['panier']['act_prix'][$i]*$_SESSION['panier']['nbrAdultes'][$i]);

					$var = ($_SESSION['panier']['act_prix'][$i]*0.5)*$_SESSION['panier']['nbrEnfants'][$i]+($_SESSION['panier']['act_prix'][$i]*$_SESSION['panier']['nbrAdultes'][$i]);

					}
					$varG += $ses_valeurs[$i]['montant'];
			}
			

	
$tpl->assign('act_valeurs',$act_valeurs);
$tpl->assign('nbrActivités',$nbrActivités);
$tpl->assign('ses_valeurs',$ses_valeurs);
$tpl->assign('varG',$varG);
$tpl->display('views/panier.html');
$tpl->assign('id_catg',$id_catg);
			}

}
	
if(isset($_POST['RESERVER'])){
		$posts = array();
		$posts[0]= $_POST['id_act'];
	
		$posts[1]= $_POST['prix'];
	
		$posts[2]= $_POST['adt'];
		
		$posts[3]= $_POST['enf'];
	
		$posts[4]= $_POST['date'];
	

		$act_valeurs= array();
		$i = 0;
	$pdostat = $pdo->query("SELECT * FROM activites WHERE id_act=".$posts[0]);
	$pdostat->setFetchMode(PDO::FETCH_OBJ);
		foreach ($pdostat as $ligne){
		$act_valeurs[$i]['id_act'] = $ligne->id_act;
		$act_valeurs[$i]['act_img'] = $ligne->act_img;
		$posts[5] = $ligne->act_img;
		$act_valeurs[$i]['act_nom'] = $ligne->act_nom;
		$posts[6] = $ligne->act_nom;
		$act_valeurs[$i]['act_prix'] = $ligne->act_prix;
		$posts[7] = $ligne->act_prix;
		$act_valeurs[$i]['act_location'] = $ligne->act_location;
		$act_valeurs[$i]['id_catg'] = $ligne->id_catg;
		$posts[8] = $ligne->id_catg;
		$i++;
		}



	$id_catg=$posts[8];

		$nbrActivités = count($_SESSION['panier']['act_nom']);
		
		if($nbrActivités <=0){
			creationPanier();
			ajouterActivité($posts[0],$posts[6],$posts[3],$posts[2],$posts[1],$posts[4],$posts[5]);
			
		}else{
			ajouterActivité($posts[0],$posts[6],$posts[3],$posts[2],$posts[1],$posts[4],$posts[5]);
		}
		

		$ses_valeurs= array();		

			for ($i=0; $i < count($_SESSION['panier']['act_nom']); $i++) { 

					$ses_valeurs[$i]['id_act'] =$_SESSION['panier']['id_act'][$i];
					$ses_valeurs[$i]['act_nom'] =$_SESSION['panier']['act_nom'][$i];
					$ses_valeurs[$i]['nbrEnfants'] =$_SESSION['panier']['nbrEnfants'][$i];
					$ses_valeurs[$i]['nbrAdultes'] =$_SESSION['panier']['nbrAdultes'][$i];
					$ses_valeurs[$i]['act_prix'] =$_SESSION['panier']['act_prix'][$i];
					$ses_valeurs[$i]['date'] =$_SESSION['panier']['date'][$i];
					$ses_valeurs[$i]['img'] =$_SESSION['panier']['img'][$i];

					if ($_SESSION['panier']['nbrEnfants'][$i]=='ENFANTS'){
						$ses_valeurs[$i]['montant'] =($_SESSION['panier']['act_prix'][$i]*0.5)+($_SESSION['panier']['act_prix'][$i]*$_SESSION['panier']['nbrAdultes'][$i]);

					$var =($_SESSION['panier']['act_prix'][$i]*0.5)+($_SESSION['panier']['act_prix'][$i]*$_SESSION['panier']['nbrAdultes'][$i]);

					}elseif ($_SESSION['panier']['nbrAdultes'][$i]=='ADULTES') {
						$ses_valeurs[$i]['montant'] =($_SESSION['panier']['act_prix'][$i]*0.5)*$_SESSION['panier']['nbrEnfants'][$i]+($_SESSION['panier']['act_prix'][$i]);

					$var =($_SESSION['panier']['act_prix'][$i]*0.5)*$_SESSION['panier']['nbrEnfants'][$i]+($_SESSION['panier']['act_prix'][$i]);
					
					}else{

					$ses_valeurs[$i]['montant'] =($_SESSION['panier']['act_prix'][$i]*0.5)*$_SESSION['panier']['nbrEnfants'][$i]+($_SESSION['panier']['act_prix'][$i]*$_SESSION['panier']['nbrAdultes'][$i]);

					$var = ($_SESSION['panier']['act_prix'][$i]*0.5)*$_SESSION['panier']['nbrEnfants'][$i]+($_SESSION['panier']['act_prix'][$i]*$_SESSION['panier']['nbrAdultes'][$i]);

					}
					
					$varG += $ses_valeurs[$i]['montant'];

			}
			

	
$tpl->assign('act_valeurs',$act_valeurs);
$tpl->assign('nbrActivités',$nbrActivités);
$tpl->assign('ses_valeurs',$ses_valeurs);
$tpl->assign('varG',$varG);
$tpl->display('views/panier.html');
$tpl->assign('id_catg',$id_catg);


}


if(isset($_POST['retirer'])){

	for ($i=0; $i < count($_SESSION['panier']['act_nom']); $i++) { 
				if( $_SESSION['panier']['act_nom'][$i] == $_POST['nom']){
					
					unset($_SESSION['panier']['id_act'][$i]);
					unset($_SESSION['panier']['act_nom'][$i]);
					unset($_SESSION['panier']['nbrEnfants'][$i]);
					unset($_SESSION['panier']['nbrAdultes'][$i]);
					unset($_SESSION['panier']['act_prix'][$i]);
					unset($_SESSION['panier']['date'][$i]);
					unset($_SESSION['panier']['img'][$i]);
					unset($_SESSION['panier']['verrou'][$i]);
					
				}
			}
			sort($_SESSION['panier']['id_act']);
			sort($_SESSION['panier']['act_nom']);
			sort($_SESSION['panier']['nbrEnfants']);
			sort($_SESSION['panier']['nbrAdultes']);
			sort($_SESSION['panier']['act_prix']);
			sort($_SESSION['panier']['date']);
			sort($_SESSION['panier']['img']);
			sort($_SESSION['panier']['verrou']);

$tpl->display('views/panier.html');
}


if(isset($_POST['modifer'])){


			for ($i=0; $i < count($_SESSION['panier']['act_nom']); $i++) { 

				if( $_SESSION['panier']['act_nom'][$i] == $_POST['nom']){
					
				$_SESSION['panier']['nbrEnfants'][$i] = $_POST['enf'];

				$_SESSION['panier']['nbrAdultes'][$i] = $_POST['adte'];

				$_SESSION['panier']['date'][$i] = $_POST['date'];

				}
			}

			$ses_valeurs= array();		

			for ($i=0; $i < count($_SESSION['panier']['act_nom']); $i++) { 

					$ses_valeurs[$i]['id_act'] =$_SESSION['panier']['id_act'][$i];
					$ses_valeurs[$i]['act_nom'] =$_SESSION['panier']['act_nom'][$i];
					$ses_valeurs[$i]['nbrEnfants'] =$_SESSION['panier']['nbrEnfants'][$i];
					$ses_valeurs[$i]['nbrAdultes'] =$_SESSION['panier']['nbrAdultes'][$i];
					$ses_valeurs[$i]['act_prix'] =$_SESSION['panier']['act_prix'][$i];
					$ses_valeurs[$i]['date'] =$_SESSION['panier']['date'][$i];
					$ses_valeurs[$i]['img'] =$_SESSION['panier']['img'][$i];

					$varG -= $ses_valeurs[$i]['montant'];


					if ($_SESSION['panier']['nbrEnfants'][$i]=='ENFANTS'){
						$ses_valeurs[$i]['montant'] =($_SESSION['panier']['act_prix'][$i]*0.5)+($_SESSION['panier']['act_prix'][$i]*$_SESSION['panier']['nbrAdultes'][$i]);

					$var =($_SESSION['panier']['act_prix'][$i]*0.5)+($_SESSION['panier']['act_prix'][$i]*$_SESSION['panier']['nbrAdultes'][$i]);

					}elseif ($_SESSION['panier']['nbrAdultes'][$i]=='ADULTES') {
						$ses_valeurs[$i]['montant'] =($_SESSION['panier']['act_prix'][$i]*0.5)*$_SESSION['panier']['nbrEnfants'][$i]+($_SESSION['panier']['act_prix'][$i]);

					$var =($_SESSION['panier']['act_prix'][$i]*0.5)*$_SESSION['panier']['nbrEnfants'][$i]+($_SESSION['panier']['act_prix'][$i]);
					
					}else{

					$ses_valeurs[$i]['montant'] =($_POST['prix']*0.5)*$_POST['enf']+($_POST['prix']*$_POST['adt']);

					$var =($_POST['prix']*0.5)*$_POST['enf']+($_POST['prix']*$_POST['adt']);

					}
					$varG += $ses_valeurs[$i]['montant'];
					
			}
			$tpl->display('views/panier.html');
}



if(isset($_POST['Valider'])){

$sesClt_valeurs= array();	

$nbr = count($_SESSION['client']['id_clt']);

		if ($nbr == 1) {
			$posts = array();
			$ses_valeurs= array();

			for ($i=0; $i < count($_SESSION['client']['id_clt']); $i++) {

					$posts[0] =$_SESSION['client']['id_clt'][$i];
					$posts[1] =$_SESSION['client']['nom'][$i];
					$posts[2] =$_SESSION['client']['email'][$i];
					$posts[3] =$_SESSION['client']['tel'][$i];
					$posts[4] =$_SESSION['client']['pays'][$i];
					$posts[5] =$_SESSION['client']['adresse'][$i];

			}

			for ($i=0; $i < count($_SESSION['panier']['act_nom']); $i++) { 

					$ses_valeurs[$i]['id_act'] =$_SESSION['panier']['id_act'][$i];
					$ses_valeurs[$i]['act_nom'] =$_SESSION['panier']['act_nom'][$i];
					$ses_valeurs[$i]['nbrEnfants'] =$_SESSION['panier']['nbrEnfants'][$i];
					$ses_valeurs[$i]['nbrAdultes'] =$_SESSION['panier']['nbrAdultes'][$i];
					$ses_valeurs[$i]['date'] =$_SESSION['panier']['date'][$i];
					$ses_valeurs[$i]['act_prix'] =$_SESSION['panier']['act_prix'][$i];
					
					$ses_valeurs[$i]['montant_act'] =($_SESSION['panier']['act_prix'][$i]*0.5)*$_SESSION['panier']['nbrEnfants'][$i]+($_SESSION['panier']['act_prix'][$i]*$_SESSION['panier']['nbrAdultes'][$i]);
					
			}

			for ($i=0; $i < count($_SESSION['panier']['act_nom']); $i++) { 
				$insertStat = $pdo->prepare('INSERT INTO reservations(id_clt,act_nom,nbrEnfants,nbrAdultes,act_date,montant_act) VALUES(:id_clt,:act_nom,:nbrEnfants,:nbrAdultes,:act_date,:montant_act)');

				$posts[6] =$ses_valeurs[$i]['act_nom'];
				
				$posts[7] =$ses_valeurs[$i]['nbrEnfants'];
			
				$posts[8] =$ses_valeurs[$i]['nbrAdultes'];
			
				$posts[9] =$ses_valeurs[$i]['date'];
			
				$posts[10] =$ses_valeurs[$i]['montant_act'];
			
				$insertStat->execute(array(
					':id_clt'=>$posts[0],
					':act_nom'=>$posts[6],
					':nbrEnfants'=>$posts[7],
					':nbrAdultes'=>$posts[8],
					':act_date'=>$posts[9],
					':montant_act'=>$posts[10]));
			}
			unset($_SESSION['panier']);
			$tpl->assign('sesClt_valeurs',$sesClt_valeurs);
			$tpl->display('views/commande.html');
		}else{

			$tpl->display('views/obligCnx.html');

		}
}

}catch(Exceeption $e){
	echo "ERREUR :".$e->getMessage();
}

?>