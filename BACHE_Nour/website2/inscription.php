<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8"/>
		<title> Trombinoscope </title>
		<style>
			
			body{
				background: #BBD2E1;
				.form{align : center;
					background: #white;}
				h1{margin: 80px;
						text-align: center}
			}
		</style>
		
		<!-- importer le fichier de style -->

		<link rel="stylesheet" type="text/css" href="./style.css"/>
	</head>
	<body>
	    <header>
			<h1> Espace Pédagogique</h1>
			<nav>
    			<ul>
    				<p>Veuillez vous identifier</p>
    				<br></br>
    				<li><a href="inscription.php">S'inscrire</a></li>
    				<li><a href="connexion1.php">Connexion</a></li>
    			</ul>
			</nav>
		</header>
		<div class = "form">
			<div align="center">
				<br /><br />
								<! -- Formulaire d'inscription -->
				<form method="POST" action="process.php">
					<table>
						
						<! -- Zone permettant d'enter l'identifiant choisi -->
						<tr>
							<td align="center">
								<label for="user"> Identifiant : </label>
							</td>
							<td>
								<input type="text" placeholder="votre identifiant" id="user" name="user"/>
							</td>
						</tr>
						
						<! -- Zone permettant d'entrer son nom -->
						<tr>
							<td align="center">
								<label for="nom"> Nom : </label>
							</td>
							<td>
								<input type="text" placeholder="votre nom" id="nom" name="nom"/>
							</td>
						</tr>
						
						<! -- Zone permettant d'entrer son adresse e-mail -->
						<tr>
							<td align="center">
								<label for="mail"> Mail : </label>
							</td>
							<td>
								<input type="email" placeholder="votre mail" id="mail" name="mail"/>
							</td>
						</tr>
						
						<! -- Zone permettant d'entrer le mot de passe choisi -->
						<tr>
							<td align="center">
								<label for="mdp">Mot de Passe : </label>
							</td>
							<td>
								<input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp"/>
							</td>
						</tr>
						
						<! -- Zone permettant d'enter son adresse -->
						<tr>
							<td align="center">
								<label for="adress"> Adresse : </label>
							</td>
							<td>
								<input type="text" placeholder="votre adresse" id="adress" name="adress"/>
							</td>
						</tr>
						
						<! -- Zone permettant d'enter son numero -->
						<tr>
							<td align="center">
								<label for="num"> Numero de téléphone : </label>
							</td>
							<td>
								<input type="text" placeholder="votre numero" id="num" name="num"/>
							</td>
						</tr>
						
						<tr>
								<td></td>
								<td align="center">
									<br />
									<input type="submit" value="Je m'inscris" />	
								</td>
						</tr>
					</table>	
				
			</div>
		</div>
		<footer>BACHE Nour LPI - WS UCP</footer>
</body>
</html>
