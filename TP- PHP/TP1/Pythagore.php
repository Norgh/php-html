<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="Pythagore.css">
<title> Pythagore </title>
</head>

<body>
<?php
echo"<table>";
echo"<caption> Table de Pythagore </caption>";
for($i=1;$i<11;$i++)
{
    echo"<tr>";
    for($j=1;$j<11;$j++)
    {
        echo"<td>";
        echo $i*$j;
        echo"</td>";
    }
    echo"</tr>";
}
echo"</table>";
?>
</body>
</html>