
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
					<li><a href="index.html">Accueil</a></li>
					<li><a href="nbache-trombinoscope-pedag.000webhostapp.com">Plateforme dédiée à l'équipe pédagogique</a></li>
				</ul>
			</nav>
		</header>
		
		
		<div>
			<ul>
				<p>Veuillez vous identifier</p>
				<br><br>
				<li><a href="inscription.html">S'inscrire</a></li>
				<li><a href="connexion1.html">Connexion</a></li>
			</ul>
		</div>
		
		<div>
			<form method="POST" action="upload.php" enctype="miltipart/form-data">
				<input type="hidden" name="taille_max" value="100000">
				Fichier : <input type="file" name="avatar">
				<input type="submit" name="envoyer" value="Deposer le fichier">
			</form>
		</div>
		
		
		<footer>
			<p>BACHE Nour</p>
			<p id="page"> Page n°1 </p>
		</footer>
	</body>
</html>