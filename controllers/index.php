<?php

	require('models/index.php');
	connection($username, $password);

	$title = "Login";
	require('core/header.php');
	require('views/index.php');
	require('core/footer.php');
