<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf8" />
<title> Liste des genres </title>
<link rel="stylesheet" href="film.css"/>
</head>
<body>
<!-- connexion au serveur-->
<!-- puis envoie/execution de la requête sur le serveur-->
<!--extraction des données dans des tableaux-->
<!-- Méthode n°1 -->
<table>
<caption> Liste des genres (Méthode n°1) </caption>
<!--affichage des données dans le tableau-->
</table>
<!-- Méthode n°2 -->
<table>
<caption> Liste des genres (Méthode n°2) </caption>
<?php
//définition de $nombreLignes et $nombreColonnes
//pas forcément cette méthode, c'est une proposition
for($i = 0; $i < $nombreLignes; $i++){
echo "<tr>";
for($j = 0; $j < $nombreColonnes; $j++)
{
echo "<td>";
//affichage de données de chaque colonne
echo "</td>";
}
echo "</tr>\n";
}
?>
</table>
<!--le formulaire-->
<form method="post" action="ajout_genre_action.php">
<fieldset>
<legend> Ajout d'un nouveau genre </legend>
<label for="genre">Genre</label> :
<input type="text" name="genre" id="genre"/>
<input type="submit" name="ajoutgenre"
id="ajoutgenre" value=" Ajout "/>
</fieldset>
</form>
</body>
</html>