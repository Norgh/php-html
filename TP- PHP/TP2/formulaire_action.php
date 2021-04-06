<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title> Formulaire Action </title>
</head>
<body>
<?php
if(isset($_POST['nom']))
$nom=$_POST['nom'];
else {$nom =" ";}
if(isset($_POST['prenom']))
$prenom=$_POST['prenom'];
else {$prenom =" ";}
if(isset($_POST['genre']))
$genre=$_POST['genre'];
else {$genre =" ";}
if(isset($_POST['sports']))
$sports=$_POST['sports'];
else {$sports =[];}
if(isset($_POST['couleur']))
$couleur=$_POST['couleur'];
else {$couleur =" ";}
echo "<p> Bonjour";
if($genre=="homme")
echo " monsieur";
else if ($genre=="femme")
echo " madame";
else if($genre=="licorne")
echo " licornae";
echo ". $nom $prenom Votre couleur préférée est le $couleur.";
if(count($sports)==0)
echo " Vous ne pratiquez aucun sport.</p>";
else {
echo " Vous pratiquez";
foreach ($sports as $key => $value )
echo " le $value";
echo ".</p>";
}
?>
</body>
</html>