<?php
function ConvertToShout($chaine){
$Maj = strtoupper($chaine);
$GoodChaine=substr_replace($Maj, '!', strlen($Maj));
echo $GoodChaine.'<br>';
}

function CalculateCircleArea($dia){
    $ray = $dia/2;
    $Surface = pi() * $ray * $ray;
    echo 'La surface est de : '.$Surface.' m²<br>';
}
function VerificationPassword($psw){
    if(strlen($psw)>=8){
        for($i=0; $i<=10;$i++){
            if(strchr($psw, "$i") != FALSE){
                if(strtolower($psw) != $psw){
                    if(strtoupper($psw) != $psw){
                        echo "Le mot de passe est valide";
                        return TRUE;
                    } else{ return FALSE;}
                } else{ return FALSE;}
            }
        } return FALSE;
    } else{ return FALSE;}

}
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Trouver des fonctions intégrées/built-in</title>
    <meta charset="UTF-8"/>
    </head>
<body>
<?php
ConvertToShout("Vive les Frites une fois");

CalculateCircleArea(25);
CalculateCircleArea(30);
CalculateCircleArea(872);
CalculateCircleArea(6);
CalculateCircleArea(29);
VerificationPassword("NoRgHlEmE1ll3uR")
?>
</body>
</html>