<!DOCTYPEhtml>
<html>
<head>
    <title>Affichage Brut</title>
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
    
    if( mysqli_num_rows($result) > 0){
        while ($row = mysqli_fetch_assoc($result)){
            echo $row["nom"];
            echo " : " ;
            echo $row["total"];
            echo "<br />";
        }
    }    
    else{
        echo "La requête ne renvoie pas de résultat !" ;
    }
    
    mysqli_close($link);
    ?>
        
</body>
</html>
    