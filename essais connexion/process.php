<?php
	$user = $_POST["user"];
	$nom = $_POST["nom"];
	$mail = $_POST["mail"];
	$mdp = $_POST["mdp"];
	$filiere = $_POST["filiere"];
	$groupe = $_POST["groupe"];
	
	$etu_exist = FAlSE;
	$fichier = "utilisateurs.csv";
	$lignes = file($fichier);
	
	
	for ($i=0; $i<sizeof($lignes); $i++){
		$ligne = $lignes[$i];
		$tableau = explode(";",$ligne);
		if ($tableau[0]==$user){
			$etu_exist = TRUE;
			#echo "<a href="index.html">Accédez à votre espace personnel</a>"
			break;	
		}	
	}
	if ($etu_exist==TRUE){
		echo "Cet utilisateur existe déjà.<p id ='bouton'><a href=inscription.html>Réessayer</a></p>";	
	}
	else{
		$fiche = fopen($fichier, "a");
		fwrite($fiche, "\n");
		$mdphash = md5($mdp);
		fwrite($fiche, $user .";" .$nom .";" .$mail .";" .$mdphash .";" .$filiere .";" .$groupe);
		fclose($fiche);
		header("Location: inscription.html");
		exit();
	} 
?>
