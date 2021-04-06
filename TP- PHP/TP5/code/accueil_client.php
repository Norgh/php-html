<?php
include('include/session.php');
?>

<!DOCTYPEhtml>
<html>
<head>
    <title>Affichage Produits</title>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="covidrive.css">
    <title>Covi'Drive</title>
</head>

<body>

    <?php
    include("hautdepage.php");
    include("include/connexionbdd.php");
    
    $requete = "SELECT Type, Produit, Quantite, prix, ID From liste_produits ORDER BY Type" ;
    $result = mysqli_query($link,$requete);

    if ( $result == FALSE ) { 
        echo mysqli_errno($conn) . ": " . mysqli_error($link). "\n"; die(); 
    } 
    
    ?>
	

        <table style="text-align:center">
            <tr>
                <th style="padding-bottom:10px;"> Liste des Produits </th>
            </tr>
			<tr style="padding-bottom:6px;">
				<th>Type</th><th>Produit</th><th>Stock</th><th>Prix en euros</th>
			</tr>
			
            <?php
                if ( mysqli_num_rows($result) > 0)
                {
                   while ($row = mysqli_fetch_assoc($result))
                    {
					    $produit = $row['ID'];
					    echo '<form method="post" action="accueil_client_action.php">';
                        echo "<tr><td>".$row['Type']."</td><td>".$row['Produit']."</td><td>".$row['Quantite']."</td><td>".$row['prix']."</td><td>".
						"<input name='quantite' id='quantite' type='number' required/>"; 
						echo '<input type="hidden" name="produit" value="'.$produit.'">';
						echo '<input type="submit" name="panier" id="bouton" value="Ajouter au panier" /></form>';
						echo'<tr></tr>';
                    }
                }
            ?>
        </table>
		</br></br></br>
    <?php
    include("basdepage.php");
    ?>
</body>
</html>