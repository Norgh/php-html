<?php

$type = $_POST['type'];
$produit = $_POST['newproduit'];
$stock = $_POST['newstock'];
$prix = $_POST['newprix'];

include("include/connexionbdd.php");

    $requete = "INSERT INTO liste_produits (Type, Produit, Quantite, prix) VALUES ('$type', '$produit', '$stock', '$prix')";
    $result = mysqli_query($link,$requete);
	if ( $result == FALSE ) { 
		echo "<p>Erreur</p>" ;
		echo mysqli_errno($conn) . ": " . mysqli_error($link). "\n"; die(); 
	} 
	
header("location:gerer_stock.php");

?>