<?php
	$nom = $_POST["user"];
	$mdp = $_POST["mdp"];
	
	$etu_exist = FAlSE;
	$fichier = "utilisateurs.csv";
	$lignes = file($fichier);
	
	for ($i=0; $i<sizeof($lignes); $i++){
		$ligne = $lignes[$i];
		$tableau = explode(";",$ligne);
		$mdphash = md5($mdp);
		if ($tableau[0]==$nom AND $tableau[2]==$mdphash){
			$etu_exist = TRUE;
			break;	
		}	
	}
	if ($etu_exist==TRUE){
		header("Location: https://nbache-trombinoscope.000webhostapp.com/etu.php?user=$ligne");
		exit();
	}
	else{
		header("Location: inscription.php");
		exit();	
	}
?>
