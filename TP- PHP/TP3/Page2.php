<?php include("TopPage.html"); ?>

<div id="navcorps"> <p> 
<form method="post" action="page2_action.php">
<fieldset>
<legend>Informations sur vous</legend>
<label for="nom">Nom</label> :
<input type="text" name="nom" id="nom" />
<label for="prenom">Prénom</label> :
<input type="text" name="prenom" id="prenom" />
<hr />
<input type="radio" name="genre" id="genre" value="homme"/>
<label for="homme">Homme</label>
<input type="radio" name="genre" id="genre" value="femme"/>
<label for="femme">Femme</label>
<input type="radio" name="genre" id="genre" value="licorne"/>
<label for="licorne">Licorne</label>
<hr />
<label>Couleur préférée</label> :
<select name="couleur">
<option value="rouge">Rouge</option>
<option value="vert">Vert</option>
<option value="bleu">Bleu</option>
<option value="jaune">Jaune</option>
</select>
<hr />
<label>Sports pratiqués</label> :
<input type="checkbox" name="sports[]" value="football" />Football
<input type="checkbox" name="sports[]" value="rugby"/>Rugby
<input type="checkbox" name="sports[]" value="golf" />Golf
<input type="checkbox" name="sports[]" value="jogging" />Jogging
<input type="checkbox" name="sports[]" value="autre" />Autre
<hr />
<label for="soumission">Soumission</label> :
<input type="submit" name="soumission" id="soumission" />
</fieldset>
</form> 
</p> </div>

<?php include("FootPage.html") ?>