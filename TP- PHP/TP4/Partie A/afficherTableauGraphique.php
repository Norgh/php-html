<!DOCTYPEhtml>
<html>
<head>
	<title>Affichage graphique</title>
	<meta charset="UTF-8"/>
</head>

<body>
<?php 
    include("connexion.php");
    if(!mysqli_set_charset($link,"utf8"))
{
    //set utf8 pour tout caractère de la base de données
    echo("Error loading character set utf8: %s\n"), mysqli_error($conn);
    exit();
}
	$requete = "SELECT fournisseur.societe as nom, sum(prixunitaire*unitesstock) as total FROM produit inner join fournisseur on produit.numfournisseur = fournisseur.numfournisseur inner join categorie on produit.codecategorie = categorie.codecategorie WHERE categorie.Nomcategorie='Boissons' GROUP BY fournisseur.societe" ;
	$result = mysqli_query($link,$requete);
	if ( $result == FALSE ){
		echo "Erreurd'exécution de la requete ";
		die();
	}
	else{
		echo "<p>SELECT a retourné " . mysqli_num_rows($result) . " lignes</p>" ;
	}
	?>
	<table border='1' align='center' cellpadding='5' >
		<tr>
		<th>Fournisseur</th>
		<td>Count</td>
		</tr>
		<?php
		$totalc=0; //hr align='right' color='red' size='1' width='20'
		if ( mysqli_num_rows($result) > 0){
			while ($row = mysqli_fetch_assoc($result)){
				/* constrution des lignes dynamiquement */
				echo "<tr>";
				echo "<td>" . $row["nom"] . "</td>" ;
				echo "<td><hr align='right' color='red' size='1' width='20'></hr></td>" ;
				echo "</tr>";
				$totalc = $totalc + $row["total"];
			}
					?><tr>
					<th>Total</th>
					<th><?php echo $totalc?></th>
					</tr><?php
		}
		else{
			echo "<tr>" ;
			echo "<td colspan='2'>La requête ne renvoie pas de résultat !</td>" ;
			echo "</tr>";
		}
		
		
		
		
	$requete = "SELECT fournisseur.societe as nom, sum(prixunitaire*unitesstock) as total FROM produit inner join fournisseur on produit.numfournisseur = fournisseur.numfournisseur inner join categorie on produit.codecategorie = categorie.codecategorie WHERE categorie.Nomcategorie='Boissons' GROUP BY fournisseur.societe" ;
	$result = mysqli_query($link,$requete);
	
	if ( $result == FALSE ){
		echo "Erreurd'exécution de la requete ";
		die();
	}
	else{
		echo "<p>SELECT a retourné " . mysqli_num_rows($result) . " lignes</p>" ;
	}
	?>
	<table border='1' align='center' cellpadding='5' >
		<tr>
		<th>Fournisseur</th>
		<td>Count</td>
		</tr>
		<?php
		$totalc=0; //hr align='right' color='red' size='1' width='20'
		if ( mysqli_num_rows($result) > 0){
			while ($row = mysqli_fetch_assoc($result)){
				/* constrution des lignes dynamiquement */
				echo "<tr>";
				echo "<td>" . $row["nom"] . "</td>" ;
				
				echo "<td><hr align='left' color='blue' size='10' width='120'></hr></td>" ;
				echo "</tr>";
				$totalc = $totalc + $row["total"];
			}
					?><tr>
					<th>Total</th>
					<th><?php echo $totalc?></th>
					</tr><?php
		}
		else{
			echo "<tr>" ;
			echo "<td colspan='2'>La requête ne renvoie pas de résultat !</td>" ;
			echo "</tr>";
		}
		
		
			$requete = "SELECT fournisseur.societe as nom, sum(prixunitaire*unitesstock) as total FROM produit inner join fournisseur on produit.numfournisseur = fournisseur.numfournisseur inner join categorie on produit.codecategorie = categorie.codecategorie WHERE categorie.Nomcategorie='Boissons' GROUP BY fournisseur.societe" ;
	$result = mysqli_query($link,$requete);
	
	if ( $result == FALSE ){
		echo "Erreurd'exécution de la requete ";
		die();
	}
	else{
		echo "<p>SELECT a retourné " . mysqli_num_rows($result) . " lignes</p>" ;
	}
	?>
	<table border='1' align='center' cellpadding='5' >
		<tr>
		<th>Fournisseur</th>
		<td>Count</td>
		</tr>
		<?php
		$totalp=0; //hr align='right' color='red' size='1' width='20'
		if ( mysqli_num_rows($result) > 0){
			while ($row = mysqli_fetch_assoc($result)){
				/* constrution des lignes dynamiquement */
				echo "<tr>";
				echo "<td>" . $row["nom"] . "</td>" ;
				$totalp = ($row["total"] * 100)/$totalc;
				$toto = ($row["total"] * 600)/$totalc;
				echo "<td><hr align='left' color='blue' size='10' width=".$toto."></hr></td>" ;
				echo "<td>" . round($totalp,2) . "</td>" ;
				echo "</tr>";
			
			}
		}
		else{
			echo "<tr>" ;
			echo "<td colspan='2'>La requête ne renvoie pas de résultat !</td>" ;
			echo "</tr>";
		}
		mysqli_close($link);
		?>
		
</body>
</html>