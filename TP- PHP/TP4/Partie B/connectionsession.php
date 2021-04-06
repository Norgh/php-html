<?php 
// Démarre une nouvelle session ou reprend une session existante 
session_start();
// test d'existence de la variable de session auth 
if ( !isset($_SESSION["auth"]) || $_SESSION["auth"] == 0 ) 
{ 
// redirection 
header("location:formacces.php"); 
} 
?>