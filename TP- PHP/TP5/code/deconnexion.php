<?php

	session_destroy();
	unset($_SESSION['ID_Client']);
	header('location:connexion.php');
	?>