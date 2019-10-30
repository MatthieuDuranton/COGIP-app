<?php

	require('models/index.php');

	$username = $_POST['username'] ?? NULL;
	$password = $_POST['password'] ?? NULL;
	connection($username, $password);

	$title = "Login";
	require('core/header.php');
	require('views/index.php');
	require('core/footer.php');
