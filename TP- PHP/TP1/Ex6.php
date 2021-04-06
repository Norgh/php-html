<?php
function remplacerLettres($chainedecaractères){
$chainedecaractères = str_replace('e','3',$chainedecaractères);
$chainedecaractères = str_replace('i','1',$chainedecaractères);
$chainedecaractères = str_replace('o','0',$chainedecaractères);
return($chainedecaractères);
}
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Exercice 6</title>
    <meta charset="UTF-8"/>
    </head>
<body>
<?php
echo remplacerLettres("J'aime bien les frites sans sauce");
?>

</body>
</html>