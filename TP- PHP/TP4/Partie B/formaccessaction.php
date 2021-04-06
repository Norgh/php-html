<?php 
// Démarre une nouvelle session ou reprend une session existante 
session_start(); 
// recuperation des valeurs du formulaire 
$login = $_POST['login'] ; 
$mdp =  $_POST['mdp']; 
if ($login == "Cir1" && $mdp == "ISEN" ) 
	// authentification réussie 
	{ 
	// création des variables de sessions + auth et nom avec les "bonnes valeurs" 
	$_SESSION["auth"] = 1 ; 
	$_SESSION["nom"] = "ISEN" ; 
	} 
	else // echec à l'authentification 
	{ 
	// création des variables de sessions - auth et nom avec les "mauvaises valeurs"
	$_SESSION["auth"] = 666 ; 
	$_SESSION["nom"] = "NoIdea" ; 
	} 
?>