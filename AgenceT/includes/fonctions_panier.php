<?php

	function creationPanier(){
		if(!isset($_SESSION['panier']){
			$_SESSION['panier']=array();
			$_SESSION['panier']['act_nom']=array();
			$_SESSION['panier']['nbrEnfants']=array();
			$_SESSION['panier']['nbrAdultes']=array();
			$_SESSION['panier']['act_prix']=array();
			$_SESSION['panier']['verrou']=false;
		}
		return true;
	}

	function ajouterActivité($act_nom,$nbr_enfants,$nbr_adultes,$prix){
		if(creationPanier() && isVerouille()){
			$positionActivité = array_search($act_nom, $_SESSION['panier']['act_nom']);

			if($positionActivité !== false){
				$_SESSION['panier']['nbrEnfants'][$positionActivité] += $nbr_enfants;

				$_SESSION['panier']['nbrAdultes'][$positionActivité] += $nbr_adultes;
				
			}else{
				array_push($_SESSION['panier']['act_nom'], $act_nom);

				array_push($_SESSION['panier']['nbrEnfants'], $nbr_enfants);

				array_push($_SESSION['panier']['nbrAdultes'], $nbr_adultes);
			}

		}else{
			echo 'Erreur, le panier n\'est pas verrouiler ou pas de creation de panier';
		}
	}

	
?>