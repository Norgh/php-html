<?php 
// Démarre une nouvelle session ou reprend une session existante 
session_start(); 
// destruction des variables de session 
unset($_SESSION["auth"]); 
unset($_SESSION["nom"]); 
// destruction de la session 
session_destroy(); 
?>