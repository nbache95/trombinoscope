
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
			<h1> Espace Etudiant</h1>
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
			    $user = $_GET['user'];
				function affiche_infos ($user){
					$tableau = explode(";",$user);
					$id = $tableau[0];
					$name = $tableau[1];
					$mail = $tableau[2];
					$filiere = $tableau[4];
					$groupe = $tableau[5];
                    echo("$id<br></br>");
                    echo("$name<br></br>");
                    echo("$mail<br></br>");
                    echo("$filiere<br></br>");
                    echo("$groupe<br></br>");
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
