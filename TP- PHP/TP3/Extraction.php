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
{ echo "Erreur de connexion : " . mysqli_connect_errno() ;
die(); }
else
{ echo "<p>connexion r&eacute;ussie</p>" ; }
/* Envoi d'une requete au serveur */
$requete = "select Societe as S, Ville from fournisseur order by Societe" ;
$result = mysqli_query($link,$requete);
if ( $result == FALSE )
{ echo "Erreur d'exécution de la requete " ;
die(); }
else
{ echo "<p>SELECT a retourné " . mysqli_num_rows($result) . " lignes</p>" ;
echo "<br/>" ; }
?>
<!-- construction du tableau en HTML avec une première ligne d'entête -->
<table border='1' align='center' cellpadding='5' >
<tr>
<th>SOCIETE</th>
<th>VILLE</th>
</tr>
<?php /* Extraction des résultats de la requete SELECT */
if ( mysqli_num_rows($result) > 0)
{
while ($row = mysqli_fetch_assoc($result))
{
/* constrution des lignes dynamiquement */
echo "<tr>";
echo "<td>" . $row["S"] . "</td>" ;
echo "<td>" . $row["Ville"] . "</td>" ;
echo "</tr>";
}
}
else
{
echo "<tr>" ;
echo "<td colspan='2'>La requête ne renvoie pas de résultat !</td>" ;
echo "</tr>";
}
?>
</table> <!-- fin du tableau -->
</body> </html>