<!DOCTYPE html>
<html> 
<head> 
<title>Exemple</title>
<meta charset="UTF-8" /> 
</head>
<body> 
<?php
// ************************************************** 
// Connexion au serveur de base de données 
// serveur : …. 
// login : … 
// mdp : ….. 
// base : ….. 
  $link = mysqli_connect("localhost", "root", "" , "execution") ;
   if ($link == false) 
    { 
       echo "Erreur de connexion : " . mysqli_connect_errno() ; die(); 
    }
    else { echo "<p>connexion r&eacute;ussie</p>" ; } 
   
/* ************************************************** */ 
/* Envoi d'une requete au serveur */ 
/* ************************************************** */ 
$requete = "select Societe, Ville from fournisseur order by Societe;" ;
 $result = mysqli_query($link,$requete);
  if ( $result == FALSE ) 
  { 
    echo "<p>Erreur d'exécution de la requête</p>" ;
    echo mysqli_errno($conn) . ": " . mysqli_error($link). "\n";
    die();
  } 
  else
   {
        echo "<p>SELECT a retourné " . mysqli_num_rows($result) . " lignes</p>" ; 
   } 
?>
</body> </html>