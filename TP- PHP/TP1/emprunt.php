<!DOCTYPE html>
<html>
<head>
<title>Exemple</title>
<meta charset="UTF-8" />
</head>
<body>
<h1>Quelques affichages de variables</h1>
<?php
// chaine de caractères
$txt = "les CIR1" ;
echo "Bienvenue " . $txt ."!" ;
?>
<div align='center'><img src="pics/emprunt.jpg" /></div>
<?php
// calcul
echo "<h1>Pret</h1>";
$capital = 200000.0 ;
$taux = 1.9 / 100 ;
$duree = 240 ;
$mensualite = $capital * ($taux/12) / ( 1 - pow(1+($taux/12),-$duree)) ;
echo "Pour un capital de " . $capital . " euros<br/>";
echo "emprunté sur une durée de " . $duree . " mois<br/>";
echo "à un taux de " . (100 * $taux) . " %<br/>";
echo "vous payerez une mensualité de " . round($mensualite,2) . " euros<br/>";
$cout = $duree * $mensualite - $capital ;
echo "le coût de votre prêt s'élève à " . round($cout,2) . " euros<br/>";
?>
</br>
<h1>Voici ma premi&egrave;re page PHP</h1>
<?php
// je suis un commentaire sur une seule ligne
echo "<h3>Bonjour les <b>CIR1</b> !</h3>" ;
echo "<p>une premi&egrave;re page avec du PHP.</p>" ;
?>
<p>Cette page est une page dynamique avec l'extension .php</p>
<?php
$nombre = 3 ;
echo "<p>Je suis encore du texte</p>";
/* je suis un commentaire sur plusieurs lignes afin d'expliquer longuement ce que fait la suite pour
me permettre de comprendre dans 10 ans ce que j'avais fait !
le nombre 10 ci-dessous est commenté lui aussi */
echo $nombre + /* 10 */ 100 ;
?>
</br>
<h1>La casse en PHP</h1>
<?php
/* ici pas de problème sur la casse */
ECHO "<h1>Bonjour les CIR1</h1>";
EchO "<h1>Bonjour les CIR1</h1>";
eCHO "<h1>Bonjour les CIR1</h1>";
/* ici, sur les variables, ATTENTION à la casse ! */
$maCouleur = "Rouge" ;
echo "sa voiture est " . $maCouleur . "<br/>" ; /* syntaxe OK */
echo "sa maison est " . $MACOULEUR . "<br/>" ; /* erreur */
echo "son avion est " . $macouleur . "<br/>" ; /* erreur */
echo "sa moto est " . $MaCouleur . "<br/>" ; /* erreur */
?>
</body>
</html>