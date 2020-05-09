<?php 
header('Content-Type: application/json');

//import du fichier csv contenant les utilisateurs
$fichier ='utilisateurs.csv';
function read($fichier){
	$fichier = fopen($fichier, 'a+');
	while (!feof($fichier)){
		$ligne[] = fgetcsv ($f, 1024, ";");
	}
	fclose($f);
	return $ligne;
}

//on appelle la fonction precedemment definie
$tableau = read($fichier);

//fonction permettant de stocker les utilisateurs dans data tries par filieres et par groupes
function parcours_tableau($tableau){
	
		//grand tableau
		$data = array();
		
		//test LPI    stockage dans LPI puis dans le groupe si l'utilisateur est en LPI
		if($tab[0][4] == "LPI" and $tab[0][5] == "A1"){
			$data["students"]["LPI"]["A1"] = $tableau[0];
			
		}
		else if($tab[0][4] == "LPI" and $tab[0][5] == "A2"){
			$data["students"]["LPI"]["A2"] = $tableau[0];
			
		}
		else {
			$data["students"]["LPI"]["A3"] = $tableau[0];
			
		}
		
		
		//test MIPI    stockage dans LPI puis dans le groupe si l'utilisateur est en LPI
		if($tab[0][4] == "MIPI" and $tab[0][5] == "A1"){
			$data["students"]["MIPI"]["A1"] = $tableau[0];
			
		}
		else if($tab[0][4] == "MIPI" and $tab[0][5] == "A2"){
			$data["students"]["MIPI"]["A2"] = $tableau[0];
			
		}
		else {
			$data["students"]["MIPI"]["A3"] = $tableau[0];
			
		}
		
		//test EG    stockage dans LPI puis dans le groupe si l'utilisateur est en LPI
		if($tab[0][4] == "EG" and $tab[0][5] == "A1"){
			$data["students"]["EG"]["A1"] = $tableau[0];
			
		}
		else if($tab[0][4] == "EG" and $tab[0][5] == "A2"){
			$data["students"]["EG"]["A2"] = $tableau[0];
			
		}
		else {
			$data["students"]["EG"]["A3"] = $tableau[0];
			
		}
	
	return $data;	
}

$a = parcours_tableau($tableau);
$json = json_encode($a);
echo($json);
?>
