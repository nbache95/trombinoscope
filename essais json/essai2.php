<?php 
	$fichier = "utilisateurs.csv";
	$lignes = file($fichier);
	
	$id ="";
	$name = "";
	$mail = "";
	$pass = "";
	$fil ="";
	$grp = "";
	$adress = "";
	$num = "";
	
	$data = array();
    $data["students"] = array();
    
    $tableau = [];
    
    for ($i=0; $i<sizeof($lignes); $i++){
		$ligne = $lignes[$i];
		$tableau = explode(";",$ligne);
		$id = $tableau[0];
		$name = $tableau[1];
		$mail = $tableau[2];
		$pass = $tableau[3];
		$fil =$tableau[4];
		$grp = $tableau[5];
		$adress = $tableau[6];
		$num = $tableau[7];
		
		$data{
			"students": [
				[$i] => [
					"id" : "$id" ,
					"name" : "$name",
					"mail" : "$mail",
					"pass" : "$pass",
					"fil" : "$fil",
					"grp" : "$grp", 
					"adress" : $adress,
					"num" : $num,
				]
			]
		}
	}
	print_r($data);
	$json = json_encode($data);
?>
