<?php

include_once '_config.inc.php';

$titre = 'Panier';
$tpl->assign('titre',$titre);

	function creationPanier(){
		if(!isset($_SESSION['panier'])){
			$_SESSION['panier']=array();
			$_SESSION['panier']['id_act']=array();
			$_SESSION['panier']['act_nom']=array();
			$_SESSION['panier']['nbrEnfants']=array();
			$_SESSION['panier']['nbrAdultes']=array();
			$_SESSION['panier']['act_prix']=array();
			$_SESSION['panier']['date']=array();
			$_SESSION['panier']['img']=array();
			$_SESSION['panier']['verrou']=false;
		}
		return true;
	}

	function ajouterActivité($id_act,$act_nom,$nbr_enfants,$nbr_adultes,$prix,$date,$img){
		if(creationPanier() ){
			$positionActivité = array_search($act_nom, $_SESSION['panier']['act_nom']);

			if($positionActivité !== false){
				header('Location: existNom.php');
				
				/*$_SESSION['panier']['id_act'][$positionActivité] += $id_act;

				$_SESSION['panier']['act_nom'][$positionActivité] += $act_nom;

				$_SESSION['panier']['nbrEnfants'][$positionActivité] += $nbr_enfants;

				$_SESSION['panier']['nbrAdultes'][$positionActivité] += $nbr_adultes;

				$_SESSION['panier']['act_prix'][$positionActivité] += $act_prix;

				$_SESSION['panier']['date'][$positionActivité] += $date;

				$_SESSION['panier']['img'][$positionActivité] += $img;*/

				echo "kayn";
				
			}else{
				array_push($_SESSION['panier']['act_nom'], $act_nom);

				array_push($_SESSION['panier']['nbrEnfants'], $nbr_enfants);

				array_push($_SESSION['panier']['nbrAdultes'], $nbr_adultes);

				array_push($_SESSION['panier']['act_prix'], $prix);

				array_push($_SESSION['panier']['date'], $date);

				array_push($_SESSION['panier']['img'], $img);
				echo "makaynch";
			}

		}else{
			echo 'Erreur, le panier n\'est pas verrouiler ou pas de creation de panier';
		}
	}

	function modifierNbr($act_nom,$nbr_adultes,$nbr_enfants){

		if(creationPanier() && isVerouille()){
			if($nbr_adultes >=1 || $nbr_enfants >=1){

				$positionActivité = array_search($act_nom, $_SESSION['panier']['act_nom']);

				if($positionActivité !== false){
					$_SESSION['panier']['nbrAdultes'][$positionActivité] = $nbr_adultes;
					$_SESSION['panier']['nbrEnfants'][$positionActivité] = $nbr_enfants;
				}
			}else{
				supprimerActivité($act_nom);
			}
		}else{
			echo 'Erreur, le panier n\'est pas verrouiler ou pas de creation de panier';
		}
	}

	function supprimerActivité($act_nom){

		if(creationPanier() ){
			$tmp = array();
			$tmp['act_nom'] = array();
			$tmp['nbrEnfants'] = array();
			$tmp['nbrAdultes'] = array();
			$tmp['act_prix'] = array();
			$tmp['verrou'] = array();

			for ($i=0; $i < count($_SESSION['panier']['act_nom']); $i++) { 
				if( $_SESSION['panier']['act_nom'][$i] !==$act_nom){
					array_push($_SESSION['panier']['id_act'],$_SESSION['panier']['id_act'][$i]);
					array_push($_SESSION['panier']['act_nom'],$_SESSION['panier']['act_nom'][$i]);
					array_push($_SESSION['panier']['nbrEnfants'],$_SESSION['panier']['nbrEnfants'][$i]);
					array_push($_SESSION['panier']['nbrAdultes'],$_SESSION['panier']['nbrAdultes'][$i]);
					array_push($_SESSION['panier']['act_prix'],$_SESSION['panier']['act_prix'][$i]);
					array_push($_SESSION['panier']['date'],$_SESSION['panier']['date'][$i]);
					array_push($_SESSION['panier']['img'],$_SESSION['panier']['img'][$i]);
					array_push($_SESSION['panier']['verrou'],$_SESSION['panier']['verrou'][$i]);
				}
			}

			$_SESSION['panier'] = $tmp;

			unset($tmp);

		}else{
			echo 'Erreur, le panier n\'est pas verrouiler ou pas de creation de panier';
		}
	}

	function montantGlobal(){
		$total = 0;

		for ($i=0; $i < count($_SESSION['panier']['act_nom']); $i++) { 
			$total += $_SESSION['panier']['nbrAdultes'][$i]*$_SESSION['panier']['act_prix']+$_SESSION['panier']['nbrEnfants'][$i]*($_SESSION['panier']['act_prix']*0.5);
		}
		return $total;
	}

	function supprimerPanier(){
		if (isset($_SESSION['panier'])) {
			unset($_SESSION['panier']);
		}

	}

	function isVerouille(){
		if(isset($_SESSION['panier']) && $_SESSION['isVerouille']){

			return true;
		}else{

			return false;
		}
	}

	function compterActivités(){

		if(isset($_SESSION['panier'])){

			return count($_SESSION['panier']['act_nom']);
			
		}else{
			return 0;
		}
	}
?>