<?php 
// Démarre une nouvelle session ou reprend une session existante 
session_start();
// test d'existence de la variable de session auth 
if ( !isset($_SESSION["ID_Client"])) { 
// redirection 
header("location:connexion.php"); 
} 
?>