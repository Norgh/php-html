<!DOCTYPE html>
<html>
<head>
<title>Exemple</title>
<meta charset="UTF-8" />
</head>
<body>
<?php
echo "Bonsoir Pariiiiiiiiis" ;
echo 'Enf*iré de Bilal';
?>

<?php
$texte = "bonjour" ;
$titre = 'Vol 714 pour Sydney' ;
?>
</br>
<?php
$nb = 12 ;
$ingredient = "oeufs" ;
$texte = "Achetez-moi ". $nb . " " . $ingredient . " frais" ;
// --> $texte contiendra la chaine "Achetez-moi 12 oeufs frais"
$annee = 1 ;
$cycle = "CIR" ;
echo "Bonjour les " . $cycle . $annee ; // affichera Bonjour les CIR1
echo " Bonjour les <b>" . $cycle . "</b>". $annee ; // affichera Bonjour les CIR1
// avec CIR en gras
echo ' Bonjour les <b>' . $cycle . "</b>". $annee ; // affichera Bonjour les CIR1
// avec CIR en gras
?>

<h1>Différence entre simple et double quotes</h1>
<?php
$nom1 = "HARLEY";
$nom2 = 'DAVIDSON';
echo "<h1>Utilisation des guillemets</h1>";
echo "$nom1 $nom2" ;
echo "<h1>Utilisation des apostrophes</h1>";
echo '$nom1 $nom2' ;
?>
</br>
<?php
echo "bonjour \"John\" " ;
echo 'bonjour \'John\' ' ;
?>
</br>
<?php
echo "Bonjour 'John' " ;
echo 'Bonjour "John" ' ;
?>
</body>
</html>