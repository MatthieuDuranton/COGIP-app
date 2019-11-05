<?php
	require('models/index.php');

	$username = $_POST['username'] ?? NULL;//si pas de username : ne rien faire (éviter les messages d'erreur car variable pas définie)
	$password = $_POST['password'] ?? NULL;//si pas de password : ne rien faire (éviter les messages d'erreur car variable pas définie)
	connection($username, $password);

	$title = "Login";
	require('core/header.php');
	require('views/index.php');
	require('core/footer.php');
