<?php
	include("include/session.php");
    include("include/connexionbdd.php");
	
	$id_client = $_SESSION['ID_Client'];
	
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
	
	
	$requete = "DELETE FROM panier WHERE ID_Client =' $id_client'" ;
	$result = mysqli_query($link,$requete);
	if ( $result == FALSE ) { 
		echo mysqli_errno($conn) . ": " . mysqli_error($link). "\n"; die(); 
	}
	
	header("location:panier.php");
?>