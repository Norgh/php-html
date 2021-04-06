<!DOCTYPEhtml>
<html>
<head>
    <title>Modification stock</title>
    <meta charset="UTF-8"/>
</head>

<body>
	<?php
	include("include/connexionbdd.php");
	include("hautdepagefournisseur.php");
	
	$requete = "SELECT Type From type" ;
	$result = mysqli_query($link,$requete);

	if ( $result == FALSE ) { 
		echo "<p>Erreur</p>" ;
		echo mysqli_errno($conn) . ": " . mysqli_error($link). "\n"; die(); 
	} 
	?>

	
	<form method="post" action="gerer_newstock_action.php">
	
		<fieldset>
			<legend><h3>Ajouter un produit</h3></legend>
			
			<label for="type">Type de produit</label> :
			<select name ="type" value="type">
				<?php
					if ( mysqli_num_rows($result) > 0){
						while ($row = mysqli_fetch_assoc($result)){
							echo "<option value='" .$row["Type"]. "'>" .$row["Type"]. "</option>" ;
						}
					}
				?>
			</select>
			
			<label for="newproduit">Produit</label> :
			<input type="text" name="newproduit" id="newproduit" />
			
			<label for="newstock">Stock</label> :
			<input type="number" name="newstock" id="newstock" />
			
			<label for="newprix">Prix</label> :
			<input type="number" name="newprix" id="newprix" />
			
			<input type="submit" name="modif" id="bouton" value="Enregistrer"/>
		
		</fieldset>
        
	</form></br></br>
	
	<?php
	$requete3 = "SELECT Produit From liste_produits ORDER BY Produit" ;
	$result3 = mysqli_query($link,$requete3);

	if ( $result3 == FALSE ) { 
		echo "<p>Erreur</p>" ;
		echo mysqli_errno($conn) . ": " . mysqli_error($link). "\n"; die(); 
	}?>
    
	<form method="post" action="gerer_stock_action.php">
	
		<fieldset>
			<legend><h3>Mettre à jour un produit</h3></legend>
			
			<label for="modif">Type de modification</label> :
			<select name ="modif" value="modif">
				<option value="ajout">Ajouter du stock</option>
				<option value="ajour">Mettre à jour le stock</option>
			</select>
			
			<label for="produit">Produits</label> :
			<select name="produit" value="produit">
				<?php
					if ( mysqli_num_rows($result3) > 0){
						while ($row3 = mysqli_fetch_assoc($result3)){
							echo "<option value='" .$row3["Produit"]. "'>" .$row3["Produit"]. "</option>" ;
							echo $row3['Produit'];
						}
					}
				?>
			</select>
		
			
			
			<label for="stock">Stock</label> :
			<input type="number" name="stock" id="stock" />
			
			<input type="input" name="modif" id="bouton" value="Mettre à jour"/>
		
		</fieldset>
        
	</form></br></br></br></br></br></br></br></br></br></br>
	
        
	<?php include("basdepage.php"); ?>
</body>
</html>