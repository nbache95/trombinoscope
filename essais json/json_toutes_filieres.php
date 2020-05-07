<?php
	//cration dun tableau MIPI
	$MIPI = array();
	$MIPI["A1"] = array();
	$MIPI["A2"] = array();
	$MIPI["A3"] = array();
	
	//creation dun tableau WS
	$WS = array();
	$WS["A1"] = array();
	$WS["A2"] = array();
	$WS["A3"] = array();
	
	//creation dun tableau EG
	$EG = array();
	$EG["A1"] = array();
	$EG["A2"] = array();
	$EG["A3"] = array();
	
	//creation de tableaux de tableaux
	for ($i=0; $i<sizeof($lignes); $i++){
		$ligne = $lignes[$i];
		$tableau = explode(";",$ligne);
		
		if ($tableau[4]=="MIPI"){
			if ($tableau[5]==A1){
				$MIPI["A1"][] = $ligne;
			}
			else if ($tableau[5]==A2){
				$MIPI["A2"][] = $ligne;
			}
			else if ($tableau[5]==A1){
				$MIPI["A3"][] = $ligne;
			}
		}
		
		if ($tableau[4]=="WS"){
			if ($tableau[5]==A1){
				$WS["A1"][] = $ligne;
			}
			else if ($tableau[5]==A2){
				$WS["A2"][] = $ligne;
			}
			else if ($tableau[5]==A1){
				$WS["A3"][] = $ligne;
			}
		}
		
		if ($tableau[4]=="EG"){
			if ($tableau[5]==A1){
				$EG["A1"][] = $ligne;
			}
			else if ($tableau[5]==A2){
				$EG["A2"][] = $ligne;
			}
			else if ($tableau[5]==A1){
				$EG["A3"][] = $ligne;
			}
		}
		
		
		//creation d'un tableau contenant les filieres contenant eux memes les groupes puis les etudiants
		$filieres = array();
		$filieres[] = $MIPI;
		$filieres[] = $WS;
		$filieres[] = $EG;

		$json1 = json_encode( $filieres );
		print_r($json1);
	}
?>
