<?php
include_once '_config.inc.php';

		$titre = 'client';
		$tpl->assign('titre',$titre);

	function creationLogin(){
		if(!isset($_SESSION['client'])){
			$_SESSION['client']=array();
			$_SESSION['client']['id_clt']=array();
			$_SESSION['client']['nom']=array();
			$_SESSION['client']['email']=array();
			$_SESSION['client']['tel']=array();
			$_SESSION['client']['pays']=array();
			$_SESSION['client']['adresse']=array();

			
		}
		return true;
	}

	function ajouterClientSession($id_clt,$nom,$email,$tel,$pays,$adresse){
		if(creationLogin()){
			
				array_push($_SESSION['client']['id_clt'], $id_clt);
				array_push($_SESSION['client']['nom'], $nom);
				array_push($_SESSION['client']['email'], $email);
				array_push($_SESSION['client']['tel'], $tel);
				array_push($_SESSION['client']['pays'], $pays);
				array_push($_SESSION['client']['adresse'], $adresse);
		}
	}
?>