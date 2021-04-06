<!DOCTYPE html>
<html>
<head>
<title>Exemple</title>
<meta charset="UTF-8" />
</head>
<body>
<?php
$link = mysqli_connect("localhost", "root", "" , "execution") ; 
if ($link == false) 
{ 
    echo "Erreur de connexion : " . mysqli_connect_errno() ; die(); 
}
/* ************************************************** */ 
/* Envoi d'une requete au serveur */ 
/* ************************************************** */ 
$requete = "update Societe set Ville='LILLE' where id=7" ;
$result = mysqli_query($link,$requete); 
if ( $result == FALSE ) 
{ 
    echo "Erreur d'exécution de la requete " ; die(); 
}
/* ************************************************** */ 
/* fermeture de la connexion */ 
/* ************************************************** */ 
mysqli_close($link);
?>
</table> <!-- fin du tableau -->

</body> </html>