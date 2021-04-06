<?php
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Génération de nombres aléatoires</title>
    <meta charset="UTF-8"/>
    </head>
<body style=background-color:black;color:white;margin-left:25%;>
<?php
// echo 'NbMax = '.getrandmax().'<br>';
$d=0;
echo '<h1>Nombres aléatoires</h1><br>';
echo '<h2>Suite de tirages</h2><br>';
do{
    $a=rand(100,999);
    $b=rand(100,999);
    $c=rand(100,999);
    $d++;
    echo $d.' : '.$a.', '.$b.', '.$c.'<br>';
} while( ($a%2)!=0 || ($b%2)!=1 || ($c%2)!=1 );
echo '<h3>Résultat obtenu en '.$d.' coups</h3>';
?>
</body>
</html>