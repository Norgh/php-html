<?php include("TopPage.html"); ?>
<div id="navcorps"> <p> 
    <?php
        if (empty($_POST['Montant'])) {
            echo "Veuillez entrer un Montant valable";
        }
        if (empty($_POST['type'])) {
            echo "Veuillez choisir la Monnaie";
        }
        else{
            $Montant= $_POST['Montant'];
            if ($_POST['type']=="euro") {
                echo " $Montant". "€ = ". $Montant*1.1 ."$";
            }
            else {
                echo " $Montant\$ = ". $Montant*0.9 ."€";
            }
        }
    ?>
    </div></p>
    <?php include("FootPage.html") ?>