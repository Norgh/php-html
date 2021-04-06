<?php
include('include/session.php');
?>
<!DOCTYPEhtml>
<html>
<head>
    <title>Informations personnelles</title>
    <meta charset="UTF-8"/>
</head>

<body>

    <?php
    include("hautdepage.php");
    include("include/connexionbdd.php");
	$ID_Client = $_SESSION['ID_Client'];
    
    $requete = "SELECT Nom, Prenom, Tel, Login, Mdp From informations_personnelles WHERE ID_Client='$ID_Client'" ;
    $result = mysqli_query($link,$requete);

    if ( $result == FALSE ) { 
        echo mysqli_errno($conn) . ": " . mysqli_error($link). "\n"; die(); 
    } 
    
	$row = mysqli_fetch_array($result);
	$nom = $row['Nom'];
	$prenom = $row['Prenom'];
	$tel = $row['Tel'];
	$login = $row['Login'];
	$mdp = $row['Mdp'];
	
	echo '<form method="post" class="infosperso" action="informations_personnelles_action.php">
    <legend><h3>Mettre à jour mes informations personnelles</h3></legend>
	</br></br>
    <label for="nom">Nom</label> :
    <input type="text" name="nom" id="nom" value="'.$nom.'"/>
    </br></br>
    <label for="prenom">Prénom</label> :
    <input type="text" name="prenom" id="prenom" value="'.$prenom.'"/>
    </br></br>
    <label for="tel">Téléphone</label> :
    <input type="text" name="tel" id="tel" value="'.$tel.'"/>
    </br></br>
    <label for="login">Login</label> :
    <input type="text" name="login" id="login" value="'.$login.'"/>
    </br></br>
    <label for="mdp">Mot de passe</label> :
    <input type="password" name="mdp" id="mdp" value="'.$mdp.'"/>
    </br></br>
    <input type="submit" name="mettreajour" id="bouton" value="Mettre à jour"/>
</form>';
    include("basdepage.php");
    ?>
</body>
</html>