
<?php 
//variable globale du nombre de lignes du fichier csv
define ("nb_lignes_csv");

//lecture du fichier csv contenant les utilisateurs
$fichier = "utilisateurs.csv";
$lignes = file($fichier);

//fonction retournant un tableau de tableaux contenant les utilisateurs classes
function ($fil,$grp){
	$data = array();
	$data["students"] = array();
	
	
	
}

//fonction permettant de trier les etudiants
function pr_json_of_students($fichier){
	for ($i=0; $i<sizeof($lignes); $i++){
		$ligne = $lignes[$i];
		$tableau = explode(";",$ligne);
		$id = $tableau[0];
		$name = $tableau[1];
		$mail = $tableau[2];
		$pass = $tableau[3];
		$fil = $tableau[4];
		$grp = $tableau[5];
		
		data{
			"students": [
				[i] => [
					"id" : "$id" ,
					"name" : "$name",
					"mail" : "$mail",
					"pass" : "$pass",
					"fil" : "$fil",
					"grp" : "$grp", 
				]
			]
		}
		
		$json1 = json_encode($data);
		print_r($json1);
	}
	return 0;
}
pr_json_of_students($fichier);
?>
