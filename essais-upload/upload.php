<?php
if (isset($_FILES['avatar'])){
	$dossier = 'etupic/' ;
	$fichier = basename($_FILES['avatar']['name']);
	if(move_uploaded_file($FILES['avatar']['tmp_name'], $dossier.$fichier)){
		echo 'fichier déposé'
	}
	else{
		echo 'le fichier na pas été déposé'
	}
} 
?>
