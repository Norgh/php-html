
	<?php
	include("include/connexionbdd.php");
	
	$requete = "SELECT Horaire, ID_Client From creneaux_horaires WHERE ID_Client = '-1' ORDER BY ID" ;
	$result = mysqli_query($link,$requete);

	if ( $result == FALSE ) { 
		echo "<p>Erreur</p>" ;
		echo mysqli_errno($conn) . ": " . mysqli_error($link). "\n"; die(); 
	} 
	?>
	
	<form method="post" action="creneaux_action.php">

	<fieldset>
		<legend>S'inscire à un créneau</legend>
		
		<label for="creneau">Créneaux</label> :
		<select name ="creneau" value="creneau">
			<?php
				if ( mysqli_num_rows($result) > 0){
					while ($row = mysqli_fetch_assoc($result)){
						if ($row["ID_Client"] == -1){
							echo "<option id =\"creneau_libre\" value='" .$row["Horaire"]. "'>" .$row["Horaire"]. "</option>" ;
						}
						else{
							echo "<option id =\"creneau_pris\" value='" .$row["Horaire"]. "'>" .$row["Horaire"]. "</option>" ;
						}
					}
				}
			?>
			<input type="submit" name="modif" id="modif" value="Commander"/>
		</select>
	</fieldset>