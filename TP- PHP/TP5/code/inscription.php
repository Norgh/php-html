<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="covidrive.css">
</head>
<body>
<form method="post" class="insc" action="inscription_action.php">
    <legend>Formulaire d'inscription</legend>
    <label for="nom">Nom</label> :
    <input type="text" name="nom" id="nom" required/>
    </br></br>
    <label for="prenom">Prénom</label> :
    <input type="text" name="prenom" id="prenom" required/>
    </br></br>
    <label for="tel">Téléphone</label> :
    <input type="text" name="tel" id="tel" required/>
    </br></br>
    <select name="statut" id="form">
        <option value="1">Client</option>
        <option value="0">Fournisseur</option>
    </select>
    </br></br></br></br>
    <label for="login">Login</label> :
    <input type="text" name="login" id="login" required/>
    </br></br>
    <label for="mdp">Mot de passe</label> :
    <input type="password" name="mdp" id="mdp" required/>
    </br></br>
    <input type="submit" name="inscription" id="bouton" value="S'inscrire"/>
</form>
</body>
</html>