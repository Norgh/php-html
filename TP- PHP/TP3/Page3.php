<?php include("TopPage.html"); ?>

<div id="navcorps"> <p> 

<h1>Convertisseur Dollars/Euros</h1>
 <form method="post" action="page3_action.php">
        <input type="radio" name="type" value="euro"/>
        <label for="euro">Euros vers Dollars</label> <br>
        <input type="radio" name="type" value="dollars"/>
        <label for="dollars">Dollars vers Euros</label>

      <br>
    Montant : <input type="number" name="Montant"/>

     <input type="submit" value="Valider"/>
    <input type="reset" value="Reinitialiser"/>
</form>  
</p> </div>

<?php include("FootPage.html") ?>