
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
					<p>Veuillez vous identifier</p>
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
			    
			    //fonction permettant afficher les informations concernant lutilisteur
				function affiche_infos ($user){
				    //separation des informations dans une variable tableau
					$tableau = explode(";",$user);
					//recuperation de chaque information dans une variable 
					$id = $tableau[0];
					$name = $tableau[1];
					$mail = $tableau[2];
					$pass = $tableau[3];
					$filiere = $tableau[4];
					$groupe = $tableau[5];
					$adress = $tableau[6];
					$num = $tableau[7];
					
					
					//affichage des informations 
					echo("Identifiant:");
                    echo("$id<br></br>");
                    echo("Nom:");
                    echo("$name<br></br>");
                    echo("Adresse e-mail:");
                    echo("$mail<br></br>");
                    echo("Filière:");
                    echo("$filiere<br></br>");
                    echo("Groupe:");
                    echo("$groupe<br></br>");
                    echo("Adresse:");
                    echo("$adress<br></br>");
                    echo("Numéro:");
                    echo("$num<br></br>");
					return 0;
				}
				affiche_infos($user);
			?>
			
			<input class="form-check-input" type="checkbox" name="collapse1[]" id="inlineCheckbox11" value="1">
		</div>
		
		<footer>
			<p>BACHE Nour</p>
			<p id="page"> Page n°1 </p>
		</footer>
	</body>
</html>
