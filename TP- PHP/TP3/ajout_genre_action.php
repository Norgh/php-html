<?php
$genre=ucfirst(strtolower($_POST['genre']));
$insertSQL="INSERT INTO genre(genre) VALUES ";
$insertSQL .="('$genre');";
include('connexion.php');
$result = mysqli_query($link, $insertSQL); if ( $result == FALSE ) { echo "Erreur d'exécution de la requete insert" ; die(); }
/* fermeture de la connexion */
header("Location: ajout_genre.php");
exit();
?>