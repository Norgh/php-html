<?php
@setlocale(LC_TIME, 'fr_FR');
echo "<p> Au moment de l'exécution de ce script PHP, nous sommes le ".strftime('%A %d %B %Y')." et il est ".strftime('%H:%M:%S')."</p>";
?>
<?php
$h=strftime('%H');
if(6<$h && $h<12)
{
echo "<p>Bonne journée!</p>";
}
elseif(12<$h && $h<16)
{
echo "<p>Bonne après-midi!</p>";
}
elseif(16<$h && $h<22)
{
echo "<p>Bonne soirée!</p>";
}
else
{
echo "<p>Bonne nuit!</p>";
}
?>

<?php
//La différence entre date et strftime est que strftime permet plusieurs arguments de sortie comme c'est une fonction
function laDateDuJour()
{
    $h=strftime('%H');
    if(6<$h && $h<12)
    {
    echo "<p>Bonne journée!</p>";
    }
    elseif(12<$h && $h<16)
    {
    echo "<p>Bonne après-midi!</p>";
    }
    elseif(16<$h && $h<22)
    {  
    echo "<p>Bonne soirée!</p>";
    }
    else
    {
    echo "<p>Bonne nuit!</p>";
    }
}
laDateDuJour();
?>