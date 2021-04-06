<?php
	include('include/session.php');
	$id = $_SESSION['ID_Client'];
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $tel=$_POST['tel'];
    $login=$_POST['login'];
    $mdp=$_POST['mdp'];

    include("include/connexionbdd.php");
    $requete = "UPDATE informations_personnelles SET Nom ='$nom', Prenom ='$prenom',Tel ='$tel',Login ='$login',Mdp ='$mdp' WHERE ID_Client = '$id'";
    $result = mysqli_query($link,$requete);
    header("location:informations_personnelles.php");
?>
