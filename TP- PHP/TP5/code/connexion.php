<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="covidrive.css">
</head>

<body class="log_menu">

<h1>Covi'Drive</h1>

<form method="post" action="connexion_action.php">
    <label for="login">Login</label> :
    <input type="text" name="login" id="login" required/>
    </br></br>
    <label for="mdp">Mot de passe</label> :
    <input type="password" name="mdp" id="mdp" required/>
    </br></br>
    <input type="submit" name="connexion" id="bouton" value="Connexion" />
	
	<p class="inscription"> Vous n'avez pas de compte ? <a class="linkinscription" href="inscription.php">Inscrivez-vous ici</a></p>
	
	</br></br></br></br></br></br>
	<img src="CoviDriveLogo.png" height="50px"/><p> Avec Covi'Drive, écrasez le Covid</p>
</form>

</body>
</html>