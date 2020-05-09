<?php 

header("Content-Type: application/json");

//fonction permettant de recuperer les etu en MIPI dans un tableau 
function MIPI($groupe, $filiere){
    $MIPI = array();
    $fichier = "utilisateurs.csv";
    $csv = fopen("utilisateurs.csv","a+");
    $lignes = file($fichier);
    
    for ($i=0; $i<sizeof($lignes); $i++){
		$ligne = $lignes[$i];
		$tableau = explode(";",$ligne);
		if ($tableau[4]==$filiere){
		    if(($tableau[5]==$groupe)){
		        $MIPI[$groupe]["identifiant"][] = $tableau[0];
		        $MIPI[$groupe]["nom"][] = $tableau[1];
		        $MIPI[$groupe]["mail"][] = $tableau[2];
		        $MIPI[$groupe]["filiere"][] = $tableau[4];
		        $MIPI[$groupe]["groupe"][] = $tableau[5];
		        $MIPI[$groupe]["adresse"][] = $tableau[6];
		        
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
  $data["MIPI"] = MIPI("A","MIPI");
$data["MIPI"] = MIPI("B","MIPI"); 
$data["MIPI"] = MIPI("B","MIPI");
  $data["EG"] = EG();
  $data["WS"] = WS();
  return $data;
}


function json(){
    $data = appel();
    $json = json_encode($data, TRUE);
    return $json;
}


	


$json = json();
echo $json;

?>
