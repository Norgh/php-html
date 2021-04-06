<?php
$link = mysqli_connect("localhost", "root", "" , "tp5") ;

if ($link == false){
	echo "Erreur de connexion : " . mysqli_connect_errno() ;
	die();
}
if(!mysqli_set_charset($link,"utf8"))
    {
        //set utf8 pour tout caractère de la base de données
        exit();
    }