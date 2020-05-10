<?php
	$user = $_POST["user"];
	$nom = $_POST["nom"];
	$mail = $_POST["mail"];
	$mdp = $_POST["mdp"];
	$adress = $_POST["adress"];
	$num = $_POST["num"];
	
	$etu_exist = FAlSE;
	$fichier = "utilisateurs.csv";
	$lignes = file($fichier);
	
	
	for ($i=0; $i<sizeof($lignes); $i++){
		$ligne = $lignes[$i];
		$tableau = explode(";",$ligne);
		if ($tableau[0]==$user){
			$etu_exist = TRUE;
			header("Location: connexion1.php");
			break;	
		}	
	}
	if ($etu_exist==TRUE){
		echo "Cet utilisateur existe déjà.<p id ='bouton'><a href=inscription.php>Réessayer</a></p>";	
	}
	else{
		$fiche = fopen($fichier, "a");
		fwrite($fiche, "\n");
		$mdphash = md5($mdp);
		fwrite($fiche, $user .";" .$nom .";" .$mail .";" .$mdphash .";" .";".$adress .";".$num);
		fclose($fiche);
		header("Location: connexion1.php");
		exit();
	} 
?>
