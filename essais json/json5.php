<?php 

//fonction permettant de recuperer les etudiants de la filiere MIPI
function WS(){
	$WS = array();
	$fichier = fopen("utilisateurs.csv", "a+");
	$ligne = 1;
	
	while($tableau = fgetcsv($fichier, 1024, ";")){
		$l = count ($tableau);
		$ligne = $ligne + 1;
		
		for ($i=0; $i<$l; $i++){
			$pos = explode(";", $tableau[$i]);
			if ($tableau[$i] == "WS"){
				array_push($WS, $pos);
			}
		}
	}
	return $WS;
}

//fonction permettant de recuperer les etudiants de la filiere EG 
function EG(){
	$EG = array();
	$fichier = fopen("utilisateurs.csv", "a+");
	$ligne = 1;
	
	while($tableau = fgetcsv($fichier, 1024, ";")){
		$l = count ($tableau);
		$ligne = $ligne + 1;
		
		for ($i=0; $i<$l; $i++){
			$pos = explode(";", $tableau[$i]);
			if ($tableau[$i] == "EG"){
				array_push($EG, $pos);
			}
		}
	}
	return $EG;
}

//fonction permettant de recuperer les etudiants de la filiere MIPI dans un tableau 
function MIPI(){
	$MIPI = array();
	$fichier = fopen("utilisateurs.csv", "a+");
	$ligne = 1;
	
	while($tableau = fgetcsv($fichier, 1024, ";")){
		$l = count ($tableau);
		$ligne = $ligne + 1;
		
		for ($i=0; $i<$l; $i++){
			$pos = explode(";", $tableau[$i]);
			if ($tableau[$i] == "MIPI"){
				array_push($MIPI, $pos);
			}
		}
	}
	return $MIPI;
}

//fonction permettant de recuperer les etudiants du groupe A1
function A1(){
	$A1 = array();
	$fichier = fopen("utilisateurs.csv", "a+");
	$ligne = 1;
	
	while($tableau = fgetcsv($fichier, 1024, ";")){
		$l = count ($tableau);
		$ligne = $ligne + 1;
		
		for ($i=0; $i<$l; $i++){
			$pos = explode(";", $tableau[$i]);
			if ($tableau[$i] == "A1"){
				array_push($A1, $pos);
			}
		}
	}
	return $A1;
}

//fonction permettant de recuperer les etudiants du groupe A2
function A2(){
	$A2 = array();
	$fichier = fopen("utilisateurs.csv", "a+");
	$ligne = 1;
	
	while($tableau = fgetcsv($fichier, 1024, ";")){
		$l = count ($tableau);
		$ligne = $ligne + 1;
		
		for ($i=0; $i<$l; $i++){
			$pos = explode(";", $tableau[$i]);
			if ($tableau[$i] == "A2"){
				array_push($A2, $pos);
			}
		}
	}
	return $A2;
}

//fonction permettant de recuperer les etudiants du groupe A3
function A3(){
	$A3 = array();
	$fichier = fopen("utilisateurs.csv", "a+");
	$ligne = 1;
	
	while($tableau = fgetcsv($fichier, 1024, ";")){
		$l = count ($tableau);
		$ligne = $ligne + 1;
		
		for ($i=0; $i<$l; $i++){
			$pos = explode(";", $tableau[$i]);
			if ($tableau[$i] == "A3"){
				array_push($A3, $pos);
			}
		}
	}
	return $A3;
}


function json ($arr){
    $json = json_encode($arr);
    return $json;
}

$MIPI = MIPI();
$json = json_encode($MIPI);
print_r($json);
?>
