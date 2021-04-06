<?php


$produit = $_POST['produit'];
$stock = $_POST['stock'];
$modif = $_POST['modif'];
include("include/connexionbdd.php");


if( $modif == "Mettre à jour"){
	$requete3 = "SELECT quantite From liste_produits WHERE Produit = '$produit'" ;
	$result3 = mysqli_query($link,$requete3);

	if ( $result3 == FALSE ) { 
		echo "<p>Erreur</p>" ;
		echo mysqli_errno($conn) . ": " . mysqli_error($link). "\n"; die(); 
	}
	$row3 = mysqli_fetch_array($result3);
	$stock = $stock + $row3['quantite'];
}


    $requete = "UPDATE liste_produits set quantite = '$stock'  Where Produit = '$produit' ";
    $result = mysqli_query($link,$requete);
	if ( $result == FALSE ) { 
		echo "<p>Erreur</p>" ;
		echo mysqli_errno($conn) . ": " . mysqli_error($link). "\n"; die(); 
	} 
	
header("location:gerer_stock.php");

?>