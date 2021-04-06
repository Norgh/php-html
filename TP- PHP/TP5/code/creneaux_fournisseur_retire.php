<?php
include('include/session.php');
include('include/connexionbdd.php');

$horaire = $_POST["test1"];


$requete = "UPDATE creneaux_horaires set ID_Client = '-1'  Where Horaire = '$horaire' ";
$result = mysqli_query($link,$requete);
if ( $result == FALSE ) { 
	echo "<p>Erreur</p>" ;
	echo mysqli_errno($conn) . ": " . mysqli_error($link). "\n"; die(); 
} 

$requete2 = "DELETE FROM panier Where ID_Client = '$id_client_retire' ";
$result2 = mysqli_query($link,$requete2);
if ( $result2 == FALSE ) { 
	echo "<p>Erreur</p>" ;
	echo mysqli_errno($conn) . ": " . mysqli_error($link). "\n"; die(); 
} 
header('location:creneaux_fournisseur.php');
?>