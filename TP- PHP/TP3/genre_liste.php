<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf8" />
<title> Liste des genres </title>
</head>
<body>
<?php
include 'connexion.php';
//Cette factorisation allège le fichier et permet une utilisation plus simple
// de la connexion si on désire se connecter plusieurs fois.
//se connecter au serveur, mais attention il faut préciser la base de donnée « film »
// Aide : suivre la méthode donnée dans la section 4.
/*Ensuite exécuter la requête suivante sur le serveur et stocker l’objet retourné dans la variable
$result
Aide : suivre la démarche de la section 5 */
$requete = "SELECT genre FROM genre" ;
$result = mysqli_query($link,$requete);
if ( $result == FALSE )
{ echo "Erreur d'exécution de la requete " ;
die(); }
else{ echo "<p>SELECT a retourné " . mysqli_num_rows($result) . " lignes</p>" ;
    echo "<br/>" ; }
/* puis vérifier que l’exécution de la requête a réussi.
Si requête réussie, retournez le nombre de lignes renvoyé par la requête.
Aide : suivre la démarche de la section 5 */
/* Extraction des résultats de la requête SELECT */
if ( mysqli_num_rows($result) > 0) {
//ci-dessous on extrait et on affiche les résultats de la requête dans une liste (comme dans la section 6 de ce document
echo "<ul>";
while ($row = mysqli_fetch_assoc($result))
{
echo "<li>".$row["genre"]."</li>\n";
}
echo "</ul>\n";
}
else
{
echo "La requête ne renvoie pas de résultat !" ;
}
mysqli_close($link);
// fermer la connexion
?>
</body>
</html>