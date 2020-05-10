<?php
header('Content-Type: application/json');

function getApi($filiere,$groupe){
	$lignes = file("utilisateurs.csv");
	$infos["nom"]=$filiere." ".$groupe;
	$infos["etudiant"]=array();
	
	for($i=0;$i<sizeof($lignes);$i++){
		$tab= explode(";",$lignes[$i]);
		$fiche_etu=array();
		if($tab[4]==$filiere && $tab[5]==$groupe)
		{
			$fiche_etu[$i]["id"]=$tab[0];
			$fiche_etu[$i]["nom"]=$tab[1];
			$fiche_etu[$i]["email"]=$tab[2];
			$fiche_etu[$i]["filiere"]=$tab[4];
			$fiche_etu[$i]["groupe"]=$tab[5];
			$fiche_etu[$i]["adresse"]=$tab[6];
			$fiche_etu[$i]["num"]=$tab[7];
			
		}
		else{
			continue;
		}
		array_push($infos['etudiant'], $fiche_etu[$i]);
	}
	return $infos;

}
function getJson($tableau){
	return json_encode($tableau);
}

$MIPI["A"]= getAPI("MIPI", "A");
$MIPI["B"]=  getAPI("MIPI", "B");
$MIPI["C"]= getAPI("MIPI", "C");
$EG["A"]= getAPI("EG", "A");
$EG["B"]= getAPI("EG", "B");
$EG["C"]=getAPI("EG", "C");
$WS["A"]=getAPI("WS","A");
$WS["B"]=getAPI("WS", "B");
$WS["C"]=getAPI("WS", "C");
$data["MIPI"] = $MIPI;
$data["EG"] = $EG;
$data["WS"] = $WS;



$json=getJson($data);
echo $json;

	
?>
