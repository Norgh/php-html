<?php
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $tel=$_POST['tel'];
    $login=$_POST['login'];
    $mdp=$_POST['mdp'];
    $statut=$_POST['statut'];

    include("include/connexionbdd.php");
    $requete = "INSERT INTO informations_personnelles (Nom, Prenom, Tel, Login, Mdp, Statut) VALUES ('$nom', '$prenom', '$tel', '$login', '$mdp', '$statut')";
    $result = mysqli_query($link,$requete);
    header("location:connexion.php");
?>
