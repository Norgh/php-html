<?php
include('include/session.php');

$creneau = $_POST["creneau"];
$client = $_SESSION["ID_Client"];

include("include/connexionbdd.php");

    $requete = "SELECT ID_Client FROM creneaux_horaires  WHERE Horaire = '$creneau' ";
    $result = mysqli_query($link,$requete);
	if ( $result == FALSE ) { 
		echo "<p>Erreur</p>" ;
		echo mysqli_errno($conn) . ": " . mysqli_error($link). "\n"; die(); 
	} 
	
	$row = mysqli_fetch_array($result);
	
	if ($row['ID_Client'] == -1){

		$requete2 = "UPDATE creneaux_horaires set ID_Client = '$client'  WHERE Horaire = '$creneau' ";
		$result2 = mysqli_query($link,$requete2);
		if ( $result2 == FALSE ) { 
			echo "<p>Erreur</p>" ;
			echo mysqli_errno($conn) . ": " . mysqli_error($link). "\n"; die(); 
		}

	}	

	
header("location:panier.php");

?>