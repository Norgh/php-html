<!DOCTYPE html>
<html>
<head>
<title>Exemple</title>
<meta charset="UTF-8" />
<link rel="stylesheet" href="genre_tab.css">
</head>
<body>
<?php
include 'connexion.php';
/* Envoi d'une requete au serveur */
$requete = "SELECT genre,id FROM genre order by id" ;
$result = mysqli_query($link,$requete);
$resultV2= mysqli_query($link,$requete);
if ( $result == FALSE )
{ echo "Erreur d'exécution de la requete " ;
die(); }
else{ echo "<p>SELECT a retourné " . mysqli_num_rows($result) . " lignes</p>" ;
    echo "<br/>" ; }
    if ( $resultV2 == FALSE )
{ echo "Erreur d'exécution de la requete " ;
die(); }
else{ echo "<p>SELECT a retourné " . mysqli_num_rows($result) . " lignes</p>" ;
    echo "<br/>" ; }
?>
<!-- construction du tableau en HTML avec une première ligne d'entête -->
<table cellpadding='6'>
<tr>
</tr>
<?php /* Extraction des résultats de la requete SELECT */
if ( mysqli_num_rows($result) > 0)
{
while ($row = mysqli_fetch_assoc($result))
{
/* constrution des lignes dynamiquement */
echo "<tr>";
echo "<td>" . $row["id"] . "</td>" ;
echo "<td>" . $row["genre"] . "</td>" ;
echo "</tr>";
}
}
else
{
echo "<tr>" ;
echo "<td colspan='2'>La requête ne renvoie pas de résultat !</td>" ;
echo "</tr>";
}
echo "<br><br><br>"
?>
</table> <!-- fin du tableau -->

<table>
<caption>Méthode n°2 </caption>
<tr>
<th>ID</th>
<th>GENRE</th>
</tr>
<?php
$nombreLignes = mysqli_num_rows($resultV2);
$nombreColonnes = 2;
$tab = [];

while ($row = mysqli_fetch_assoc($resultV2)){
    array_push($tab, array($row["id"], $row["genre"]));
}
for($i = 10; $i < $nombreLignes; $i++){
     echo "<tr>";
     for($j = 0; $j < $nombreColonnes; $j++){
         echo "<td>";
         echo $tab[$i][$j];
     echo "</td>";
    }
     echo "</tr>\n";
}
?>
</table>
</body> </html>