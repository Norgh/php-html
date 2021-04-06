<?php
include("connexion.php");
if(!mysqli_set_charset($link,"utf8"))
{
    //set utf8 pour tout caractère de la base de données
    echo("Error loading character set utf8: %s\n"), mysqli_error($conn);
    exit();
}
if(isset($_GET['quantit']))
$quantit=$_GET['quantit'];
else {$quantit ="?";}
echo "La quantité est de : $quantit";
$requete = "UPDATE produit set unitesstock = $quantit  where numfournisseur = 20 and CodeCategorie = 1" ;
$result = mysqli_query($link,$requete);
?>
