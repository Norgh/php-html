<?php
include('include/session.php');
include('include/connexionbdd.php');

$horaire = $_POST['test1'];
$id_client = $_POST['test2'];


$requete = "UPDATE creneaux_horaires set ID_Client = '-1'  Where Horaire = '$horaire' ";
$result = mysqli_query($link,$requete);
if ( $result == FALSE ) { 
	echo "<p>Erreur</p>" ;
	echo mysqli_errno($conn) . ": " . mysqli_error($link). "\n"; die(); 
} 

$requete2 = "SELECT ID, quantite FROM panier WHERE ID_Client =' $id_client'" ;
	$result2 = mysqli_query($link,$requete2);
	if ( $result2 == FALSE ) { 
		echo mysqli_errno($conn) . ": " . mysqli_error($link). "\n"; die(); 
	}
	
	if ( mysqli_num_rows($result2) > 0)
	{
		while ($row2 = mysqli_fetch_assoc($result2))
		{
			$idproduit = $row2['ID'];
			$requete3 = "SELECT Quantite FROM liste_produits WHERE ID=' $idproduit'" ;
			$result3 = mysqli_query($link,$requete3);
			if ( $result3 == FALSE ) { 
				echo mysqli_errno($conn) . ": " . mysqli_error($link). "\n"; die(); 
			}
			
			$row3 = mysqli_fetch_array($result3);
			$stock = $row3['Quantite'] + $row2['quantite'];
			
			$requete4= "UPDATE liste_produits SET Quantite = '$stock' WHERE ID=' $idproduit'" ;
			$result4 = mysqli_query($link,$requete4);
			if ( $result4 == FALSE ) { 
				echo mysqli_errno($conn) . ": " . mysqli_error($link). "\n"; die(); 
			}
			
		}
	}

header('location:creneaux_fournisseur.php');
?>