<!DOCTYPE html>
<html>
<head>
<title>Exemple</title>
<meta charset="UTF-8" />
</head>
<body>
<h1>Structures de contrôle</h1>
<?php
$t = date("H"); // cette fonction avec ce paramètre renvoie l'heure du serveur
if ($t < "20")
{ 
    echo "Have a good day !"; 
}
else
{
     echo "Have a good night !"; 
}
?>
</br>
<h1>Structures de contrôle</h1>
<?php
$x = 0.0 ;
while ( $x <= 1 )
{
echo "cos(" . $x . ") = " . cos($x) . " <br/>";
$x = $x + 0.1 ;
}
?>
</br>
<h1>Structures de contrôle</h1>
<?php
$x = 1.0 ;
do
{
echo "sin(" . $x . ") = " . sin($x) . "<br/>";
$x = $x - 0.1 ;
}
while ( $x >= 0.1 )
?>
</br>
<h1>Structures de contrôle</h1>
<?php
echo "<h2>Table de multiplication de 7 (Non ordonnée comme demandé) : </h2>";
for ($cpt = 1 ; $cpt <= 100 ; $cpt++ )
{
echo "7 x " . $cpt . " = " . ($cpt * 7) ;
}
?>
</body>
</html>