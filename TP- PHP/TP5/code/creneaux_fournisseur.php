<?php include('include/session.php');?>
<!DOCTYPEhtml>
<html>
<head>
    <title>S'inscrire à un créneau</title>
	<link rel="stylesheet" href="covidrive.css">
    <meta charset="UTF-8"/>
</head>

<body>

	<?php
	include("include/connexionbdd.php");
	include("hautdepagefournisseur.php");
	
	$requete = "SELECT Horaire, ID_Client From creneaux_horaires order by ID" ;
	$result = mysqli_query($link,$requete);

	if ( $result == FALSE ) { 
		echo "<p>Erreur</p>" ;
		echo mysqli_errno($conn) . ": " . mysqli_error($link). "\n"; die(); 
	} 
	
	?>
	
	<table style="border-collapse:collapse;text-align:center">
		<tr>
			<th> Creneaux horaires </th>
			<th> Commandes </th>
		</tr>
			<?php
				if ( mysqli_num_rows($result) > 0){
					while ($row = mysqli_fetch_assoc($result)){
						if ( $row["ID_Client"] != -1 ){
							
							echo "<tr><td style='border-width:1px;border-style:solid;border-color:black;width:50%;'>" .$row["Horaire"]. "</td><td style='border-width:1px;border-style:solid;border-color:black;width:50%;'>"; 
							
							$client = $row["ID_Client"];
							$horaire = $row["Horaire"];
							$id_client_horaire = $row["ID_Client"];
								
							$requete2 = "SELECT Nom, Prenom,Tel FROM informations_personnelles WHERE ID_Client = '$client'" ;
							$result2 = mysqli_query($link,$requete2);

							if ( $result2 == FALSE ) { 
								echo "<p>Erreur</p>" ;
								echo mysqli_errno($conn) . ": " . mysqli_error($link). "\n"; die(); 
							} 
							
							$row2 = mysqli_fetch_array($result2);
							echo "Nom: ". $row2['Nom']."| Prenom: ".$row2['Prenom']."| Téléphone: ".$row2['Tel']."</br>" ;
							
							
							$requete3 = "SELECT ID, quantite FROM panier WHERE ID_Client = '$client'" ;
							$result3 = mysqli_query($link,$requete3);

							if ( $result3 == FALSE ) { 
								echo "<p>Erreur</p>" ;
								echo mysqli_errno($conn) . ": " . mysqli_error($link). "\n"; die(); 
							} 
							
							echo "</br>Commande :</br>";
							while ($row3 = mysqli_fetch_assoc($result3)){
								echo $row3['quantite']." exemplaire(s) de ";
								
									
								$produit = $row3['ID'];
								$requete4 = "SELECT Produit FROM liste_produits WHERE ID = '$produit'" ;
								$result4 = mysqli_query($link,$requete4);

								if ( $result4 == FALSE ) { 
									echo "<p>Erreur</p>" ;
									echo mysqli_errno($conn) . ": " . mysqli_error($link). "\n"; die(); 
								} 
								
								$row4 = mysqli_fetch_array($result4);
								echo $row4['Produit']."</br>";
							}
							
							
							echo'<form method="post" action="creneaux_fournisseur_retire.php">
							
									<input type="hidden" name="test1" value="'.$horaire.'">
									<input type="hidden" name="test2" value="'.$id_client_horaire.'">
									<input type="submit" name="retire" value="La commande a été retirée"/>
							</form>
							
							<form method="post" action="creneaux_fournisseur_pasretire.php">
								<input type="hidden" name="test1" value="'.$horaire.'">
								<input type="hidden" name="test2" value="'.$id_client_horaire.'">
								<input type="submit" name="pasretire" value="La commande n\'a pas été retirée"/>
								
							</form>';
							
							echo"</br></td></tr>";	
								
						}
						else{
							echo "<tr><td style='border-width:1px;border-style:solid;border-color:black;width:50%;'>" .$row["Horaire"]. "</td><td style='border-width:1px;border-style:solid;border-color:black;width:50%;'> Pas de commande</td></tr>";
						}
					}
				}
			?>
		</table>
</body>
<?php include('basdepage.php');?>

</html>