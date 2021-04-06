<?php
$link = mysqli_connect("localhost", "root", "" , "filmeuh") ;
if ($link == false)
{
echo "Erreur de connexion : " . mysqli_connect_errno() ;
die();
}
else
{
echo "<p>connexion r&eacute;ussie</p>" ;
}