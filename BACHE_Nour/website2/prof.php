
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8"/>
		<title> Trombinoscope </title>
		
		<!-- importer le fichier de style -->

		<link rel="stylesheet" type="text/css" href="./style.css"/>
	</head>
	<body>
		<header>
			<h1> Espace Pédagogique</h1>
			<nav>
				<ul>
					<br><br>
					<li><a href="inscription.php">S'inscrire</a></li>
				<li><a href="connexion1.php">Connexion</a></li>
				</ul>
			</nav>
		</header>

		<div>
			<?php
			
			//recuperation de la ligne de l'utilisateur entre pour la connexion
			$user = $_GET['user'];
	        $tableau = explode(";",$user);
			echo("Bonjour ");
			echo("$tableau[1]");
			echo("<br></br>");
				
			//recuperation de lapi
			$filieres_json = file_get_contents("https://nbache-trombinoscope.000webhostapp.com/json2.php/getAPI.php?requete=ALL");
			//print_r($filieres_json);
			$result = json_decode($filieres_json);
			print_r($result);
			?>
		</div>
		
		<footer>
			<p>BACHE Nour</p>
			<p id="page"> Page n°1 </p>
		</footer>
	</body>
</html>
