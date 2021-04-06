<?php
	session_start();
    $login=$_POST['login'];
    $mdp=$_POST['mdp'];

    include("include/connexionbdd.php");

    $requete = "SELECT ID_CLient,Login, Mdp, Statut From informations_personnelles";
    $result = mysqli_query($link,$requete);
    $motdepasse=0;
    while($row=mysqli_fetch_assoc($result))
    {
        if($row["Login"] == $login && $row["Mdp"] == $mdp)
        {
			if($row['Statut'] == 1){
				$motdepasse=$motdepasse+1;
				$_SESSION['ID_Client'] = $row['ID_CLient'];
				header('Location:accueil_client.php');
			}
			else{
				$motdepasse=$motdepasse+1;
				header('Location:accueil_fournisseur.php');
			}
        }
    }
    if($motdepasse!=1)
    {
        header('Location:connexion.php');
    }
?>
