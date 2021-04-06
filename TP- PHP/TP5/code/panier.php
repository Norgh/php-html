<?php include('include/session.php');?>
<!DOCTYPEhtml>
<html>
<head>
    <title>Affichage Produits</title>
    <meta charset="UTF-8"/>
</head>

<body style="text-align:center;">

    <?php
    include("hautdepage.php");
    include("include/connexionbdd.php");
	$id = $_SESSION['ID_Client'];
	$prixpanier = 0;

    $requete = "SELECT ID, quantite From panier WHERE ID_Client = '$id'" ;
    $result = mysqli_query($link,$requete);

    if ( $result == FALSE ) { 
        echo mysqli_errno($conn) . ": " . mysqli_error($link). "\n"; die(); 
    } 
    
    ?>
        <table>
            <tr>
                <th> Liste du panier </th>
            </tr>
                <?php
                  if ( mysqli_num_rows($result) > 0)
                   {
                       while ($row = mysqli_fetch_assoc($result))
                     {
						echo'<tr><td>';
						$id = $row['ID'];
                        $requete2 = "SELECT produit, prix from liste_produits WHERE ID = '$id'" ;
						$result2 = mysqli_query($link,$requete2);

						if ( $result2 == FALSE ) { 
							echo mysqli_errno($conn) . ": " . mysqli_error($link). "\n"; die(); 
							
						} 
						$row2 = mysqli_fetch_array($result2);
						echo "Vous avez commandé ".$row['quantite']." de ".$row2['produit'];
						$prixpanier = $prixpanier + ($row['quantite'] * $row2['prix']);
						echo'</tr></td>';
                     }
                    }
                ?>
        </table>
		</br></br></br></br></br></br></br></br></br></br></br>
	<p>Le prix total du panier est de <?php echo $prixpanier;?> €</p>
		
	<form method="post" action="supprimer_panier.php">
		<legend>Supprimer le panier</legend>
		</br>
		<input type="submit" name="supprimer" id="bouton" value="Supprimer"/>
	</form></br></br>

    <?php
		$id = $_SESSION['ID_Client'];
		$requete3 = "SELECT Horaire from creneaux_horaires WHERE ID_Client = '$id'" ;
		$result3 = mysqli_query($link,$requete3);
		if ( $result3 == FALSE ) { 
			echo mysqli_errno($conn) . ": " . mysqli_error($link). "\n"; die(); 
		} 	

		if ( mysqli_num_rows($result3) > 0){
			$row3 = mysqli_fetch_array($result3);
			echo"Vous pouvez venir récupérer votre drice sur la plage horaire ".$row3['Horaire'];
        }
		else{
			include('creneaux.php');
		}
		
    include("basdepage.php");
    ?>
</body>
</html>