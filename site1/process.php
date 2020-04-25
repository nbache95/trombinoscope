<?php
if (isset($_GET["formtype"])){
	$fichier = "utilisateurs.csv";
	if($_GET["formtype"] == "connexion"){


		$doesUserExist = FALSE;
		$lignes = file($fichier);
		for($i=0;$i<sizeof($lignes);$i++){	
			$ligne = $lignes[$i];
			$ligne = str_replace("\n","",$ligne);
			if ($ligne == $_GET["login"].",".$_GET["password"]){
				$doesUserExist = TRUE;
			}
		}

		if( $doesUserExist == TRUE ){
			echo " Bienvenu ! ";
			echo($_GET["login"]);
			echo " Connexion établie <br>";
		}
		else{
			echo "Veuillez réssayer";
		}
	}

	elseif ($_GET["formtype"] == "inscription") {

		$doesUserExist = FALSE;
		$lines = file($fichier);
		for($i=0;$i<sizeof($lines);$i++){	
			$line = $lines[$i];
			# remove new line character
			$line = str_replace("\n","",$line);
			$t = explode(",", $line);
			if ($t[0] == $_GET["logini"]){
				$doesUserExist = TRUE;
			}
		}

		if( $doesUserExist == TRUE ){
			echo($_GET["logini"]);
			echo " ce nom
			 est déjà pris";
		}
		else{
			$fichier_end = fopen($fichier,"a");
			fwrite($fichier_end, $_GET["logini"] .",".$_GET["passwordi"].$fichier_end, $_GET["name"] .",".$fichier_end, $_GET["mail"] ."," "\n");
			fclose($fichier_end);
			echo $_GET["logini"]." vient de s'inscrire";
		}
	}
	else{
		header('Location: ./forn.html');
  		exit();
	} 
}
else{
	header('Location: ./forn.html');
  	exit();
}
?>
