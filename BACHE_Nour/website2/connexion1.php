<!DOCTYPE html>
<html lang="fr">
	<head>
	    <a href="https://nbache-trombinoscope.000webhostapp.com/etu.php?user=$ligne"></a>
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
			<h1> Espace Pedagogique</h1>
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
				<form method="POST" action="connexions1.php">
					<table>
						<tr>
							<td align="center">
								<label for="user"> Identifiant : </label>
							</td>
							<td>
								<input type="text" placeholder="votre identifiant" id="user" name="user"/>
							</td>
						</tr>

						<tr>
							<td align="center">
								<label for="mdp">Mot de Passe : </label>
							</td>
							<td>
								<input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp"/>
							</td>
						</tr>
						<tr>
								<td></td>
								<td align="center">
									<br />
									<input type="submit" value="Je me connecte" />	
								</td>
						</tr>
					</table>	
				</form>
			</div>
		</div>
		<footer>BACHE Nour LPI - WS UCP</footer>
</body>
</html>
