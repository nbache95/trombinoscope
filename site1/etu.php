<?php 
	$groups = array();
	$MIPI = array();
	$WS = array();
	$EG = array();
	$groups[0] = $MIPI;
	$groups[1] = $WS;
	$groups[2] = $EG;
	
	$etudiants = array();
	$etudiants["nom"] = array();
	$etudiants["mail"] = array();
	$etudiants["filiere"] = array();
	$etudiants["groupe"] = array();
	
	function tab_infos{
		$fichier = "utilisateurs.csv";
		$lignes = file($fichier);
		for ($i=0; $i<$strlen($lignes; $i=$i+1){
			$ligne = $lignes[$i];
			$tableau = explode(";",$ligne);
			
			$etudiants["nom"] []= $tableau[1];
			$etudiants["mail"] []= $tableau[2];
			$etudiants["filiere"] [] = $tableau[4];
			$etudiants["groupe"] []= $tableau[5];
			
			if ($tableau[4] == "MIPI"){
				
			}
			else if ($tableau[4] == "WS"){
				
			}
			else if ($tableau[4] == "EG"){
				
			}
		}
	}
	
	function affiche_infos (){
		print_r($
	}
	
	
?>
