<!DOCTYPEhtml>
<html>
<head>
    <title></title>
    <meta charset="UTF-8"/>
</head>

<body>

<?php

    include("connexion.php");

    if(!mysqli_set_charset($link,"utf8"))
    {
        echo("Error loading character set utf8: %s\n"), mysqli_error($conn);
        exit();
    }
    if(isset($_GET['quantit'])){
    $quantit=$_GET['quantit'];}
    else {$quantit ="?";}
    if(isset($_GET['boisson']))
    $refProd=$_GET['boisson'];
    else {$refProd ="?";}
    echo "La quantité est de : $quantit";
    echo " Le choix est le : $refProd";
    $requete = "UPDATE produit set unitesstock = $quantit where refproduit = $refProd and CodeCategorie = 1 ";
    $result = mysqli_query($link,$requete);

?>

</body>
</html>