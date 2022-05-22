<?php
	// sa c pour hacker le systeme non je rigole c pour initialiser la session
	session_start();
	
	// et sa pour détruire la session.
	if(session_destroy())
	{
		// Redirection vers la page de connexion
		header("Location: login.php");
	}
?>