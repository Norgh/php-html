<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Fonctions pour gérer et manipuler les tableaux</title>
</head>
<body>
<?php

$message = ["Oh hello", " You're doing great", " Keep up the good work!\n"];
$favorite_nums = [7, 201, 33, 88, 91];

echo implode("!",$message);
echo "<br>";

print_r($favorite_nums);
echo "<br>";

$stack= ["wild success", "failure", "struggle"];

array_push($stack, "blocker", "impediment");
print_r($stack);
echo "<br>";

$stack = array_pop($stack);
print_r($stack);
echo "<br>";

$record_holders = [];

array_unshift($record_holders, "Tim Montgomery", "Maurice Greene", "Donovan Bailey", "Leroy Burrell", "Carl Lewis");
print_r($record_holders);
echo "<br>";

array_shift($record_holders);
print_r($record_holders);
echo "<br>";

array_unshift($record_holders, "Justin Gatlin", "Asafa Powell");
print_r($record_holders);
echo "<br>";

array_shift($record_holders);
print_r($record_holders);
echo "<br>";

function premierElementTableau($t){
    if(empty($t)) {
        return "null";
    }
    else {
        return array_shift($t);
    }
}

function dernierElementTableau($t){
    if(empty($t)) {
        return "null";
    }
    else {
        return array_pop($t);
    }
}

echo premierElementTableau($record_holders);
echo "<br>";

echo dernierElementTableau($record_holders);
echo "<br>";

?>
</body>
</html>
