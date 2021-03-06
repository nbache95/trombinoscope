<?php 

//fonction permettant de recuperer les etu en MIPI dans un tableau 
function MIPI(){
    $MIPI = array();
    $fichier = "utilisateurs.csv";
    $csv = fopen("utilisateurs.csv","a+");
    $lignes = file($fichier);
    
    for ($i=0; $i<sizeof($lignes); $i++){
		$ligne = $lignes[$i];
		$tableau = explode(";",$ligne);
		if ($tableau[4]=="MIPI"){
		    if($tableau[5]=="A"){
		        $MIPI["A"][] = $ligne;
		    }
		    else if ($tableau[5]=="B"){
		        $MIPI["B"][] = $ligne;
		    }
		    else if ($tableau[5]=="C"){
		        $MIPI["C"][] = $ligne;
		    }
		}	
	}
	return $MIPI; 
}

//fonction permettant de recuperer les etu en EG dans un tableau
function EG(){
    $EG = array();
    $fichier = "utilisateurs.csv";
    $csv = fopen("utilisateurs.csv","a+");
    $lignes = file($fichier);
    
    for ($i=0; $i<sizeof($lignes); $i++){
		$ligne = $lignes[$i];
		$tableau = explode(";",$ligne);
		if ($tableau[4]=="EG"){
		    if($tableau[5]=="A"){
		        $EG["A"][] = $ligne;
		    }
		    else if ($tableau[5]=="B"){
		        $EG["B"][] = $ligne;
		    }
		    else if ($tableau[5]=="C"){
		        $EG["C"][] = $ligne;
		    }
		}	
	}
	return $EG; 
}


//fonction permettant de recuperer les etu en WS dans un tableau
function WS(){
    $WS = array();
    $fichier = "utilisateurs.csv";
    $csv = fopen("utilisateurs.csv","a+");
    $lignes = file($fichier);
    
    for ($i=0; $i<sizeof($lignes); $i++){
		$ligne = $lignes[$i];
		$tableau = explode(";",$ligne);
		if ($tableau[4]=="WS"){
		    if($tableau[5]=="A"){
		        $WS["A"][] = $ligne;
		    }
		    else if ($tableau[5]=="B"){
		        $WS["B"][] = $ligne;
		    }
		    else if ($tableau[5]=="C"){
		        $WS["C"][] = $ligne;
		    }
		}	
	}
	return $WS; 
}



function appel(){
  $data = array();
  $data["MIPI"] = MIPI();
  $data["EG"] = EG();
  $data["WS"] = WS();
  return $data;
}


function json(){
    $data = appel();
    $json = json_encode($data);
    return $json;
}

$json = json();
print_r($json);

?>
