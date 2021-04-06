<?php
function premierElementTableau($array){
    if (empty($array)){
    return null;
    }
    else {
    echo $array[0];
    echo"</p>";
    }
}

function dernierElementTableau($array){
$l = count($array);
    if (empty($array)){
    echo null;
    }
    else{
    echo $array[$l-1];
    }
}
?>

<?php
$array = array(666,666.666,669,999.666);
echo premierElementTableau($array);
echo dernierElementTableau($array);
?>