<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title> Boissons Formulaire Dynamique</title>
</head>
<body>
	<?php 

	include("connexion.php");
	$requete = "select RefProduit as ref, NomProduit as pdt from produit" ;
	$result = mysqli_query($link,$requete);

	if ( $result == FALSE ) { 

		echo "<p>Erreur d'exécution de la requete</p>" ;
		echo mysqli_errno($conn) . ": " . mysqli_error($link). "\n"; die(); 
	} 
	else { 
		echo "<p>SELECT a retourné " . mysqli_num_rows($result) . " lignes</p>" ; 
	}
	?>
	<p>Produit </p>
	<form>
		<select value="ID">
			<?php
				if ( mysqli_num_rows($result) > 0){
					while ($row = mysqli_fetch_assoc($result)){
						echo "<option value='" .$row["ref"]. "'>" .$row["pdt"]. "</option>" ;
					}
				}
			?>
			</select>
		</form>
		
		<?php 
	$requete = "select RefProduit as ref,UnitesStock as stock, NomProduit as pdt from produit" ;
	$result = mysqli_query($link,$requete);

	if ( $result == FALSE ) { 

		echo "<p>Erreur d'exécution de la requete</p>" ;
		echo mysqli_errno($conn) . ": " . mysqli_error($link). "\n"; die(); 
	} 
	else { 
		echo "<p>SELECT a retourné " . mysqli_num_rows($result) . " lignes</p>" ; 
	}
	?>	
	<p>Produit disponible</p>
	<form method="get" action="boissonsFormulaireDyn_action.php">
		<select name="boisson">
			<?php
				if ( mysqli_num_rows($result) > 0){
					while ($row = mysqli_fetch_assoc($result)){
						if ($row[stock] != 0){
						echo "<option value='" .$row["ref"]. "'>" .$row["pdt"]. "</option>" ;
						}
						else{
							echo "<option value='" .$row["ref"]. "' style=\"background-color:orange;font-style: italic;\">" .$row["pdt"]. "</option>" ;
						}
					}
				}
			?>
			</select></br>
			<label for="nom">Quantité</label> :
			<input type="text" name="quantit" id="quantit" />
			<input type="submit" name="modif" id="modif" value="Modifier"/>
		</form>
    
</body>
</html>
