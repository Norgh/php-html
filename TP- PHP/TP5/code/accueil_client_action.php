<?php
	include ("include/session.php");
    include("include/connexionbdd.php");
	
	$id_client = $_SESSION['ID_Client'];
	$produit = $_POST['produit'];
	$quantite = $_POST['quantite'];
	$ajout= false;
	
	$requete2 = "SELECT Quantite FROM liste_produits WHERE ID = '$produit'" ;
    $result2 = mysqli_query($link,$requete2);
	if ( $result2 == FALSE ) { 
        echo mysqli_errno($conn) . ": " . mysqli_error($link). "\n"; die(); 
    } 
	$row2 = mysqli_fetch_array($result2);
	
	$stock = $row2['Quantite'] - $quantite ;
	
	if ($stock >=0 && $quantite > 0){
		
		$requete4 = "SELECT quantite, id FROM panier WHERE ID_Client = '$id_client'" ;
		$result4 = mysqli_query($link,$requete4);

		if ( $result4 == FALSE ) { 
			echo mysqli_errno($conn) . ": " . mysqli_error($link). "\n"; die(); 
		}
		
		if ( mysqli_num_rows($result4) > 0)
		{
			while ($row4 = mysqli_fetch_assoc($result4))
			{
				if($row4['id'] == $produit){
					$total = $quantite + $row4['quantite'];
					$produitajout = $row4['id'];
					$requete5 = "UPDATE panier SET quantite ='$total' WHERE ID = '$produitajout'" ;
					$result5 = mysqli_query($link,$requete5);

					if ( $result5 == FALSE ) { 
						echo mysqli_errno($conn) . ": " . mysqli_error($link). "\n"; die(); 
					}
					$ajout = true;
				}
			}
		}	
		
		if ($ajout == false){
			$requete = "INSERT INTO panier VALUES ('$id_client', '$produit', '$quantite')" ;
			$result = mysqli_query($link,$requete);

			if ( $result == FALSE ) { 
				echo mysqli_errno($conn) . ": " . mysqli_error($link). "\n"; die(); 
			}
			
		}
		
		$requete3 = "UPDATE liste_produits SET Quantite ='$stock' WHERE ID = '$produit'" ;
			$result3 = mysqli_query($link,$requete3);

			if ( $result3 == FALSE ) { 
				echo mysqli_errno($conn) . ": " . mysqli_error($link). "\n"; die(); 
			}
	}
	
	header("location:accueil_client.php");
?>