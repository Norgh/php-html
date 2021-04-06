<?php
function CalculateDistance($a, $b){
$Distance = abs($b-$a);
echo 'La distance entre ';
echo $a;
echo  ' et ' ;
echo $b ;
echo ' est : ';
echo $Distance;
echo '<br>';
return $Distance = abs($b-$a);;
}

function CalculateTip($c){
echo ('Total : '.round($c*1.18));
echo '<br>';
}
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Fonctions Mathématiques</title>
    <meta charset="UTF-8"/>
    </head>
<body>
<?php
CalculateDistance(-1, 4);
CalculateDistance(4, -1) ;
CalculateDistance(3, 7);
CalculateDistance(7, 3);

CalculateTip(100);
CalculateTip(35);
CalculateTip(88.77);
?>
</body>
</html>