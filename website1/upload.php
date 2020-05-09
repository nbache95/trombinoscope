<?php
if (isset($_FILES['avatar'])){
	$dossier = 'etupic/' ;
	$fichier = basename($_FILES['avatar']['name']);
	if(move_uploaded_file($FILES['avatar']['tmp_name'], $dossier.$fichier)){
		echo ("fichier déposé");
		header("Location: etu.php");
	}
	else{
		echo ("le fichier na pas été déposé");
		header("Location: etu.php");
	}
} 

//recuperation de lurl de l'image aisi que de l'identifiant
$id = $_POST["id"];
$pic = $_POST["pic"];

//on ouvre le csv des utilisateurs
$fichier = "/studpic/url.csv";
$lignes = file($fichier);

for ($i=0; $i<sizeof($lignes); $i++){
	$ligne = $lignes[$i];
	$tableau = explode(";",$ligne);
	if ($tableau[0]==$user){
	    $fiche = fopen($fichier, "a");
	    fwrite($fiche, $user.";".$pic);
	}
?>
