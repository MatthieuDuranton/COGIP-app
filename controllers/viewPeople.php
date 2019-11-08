<?php
	require('models/viewPeople.php');

	$title = "Contact - ".$dataPeople['firstname']." ".$dataPeople['lastname'];
	require('core/header.php');
	require('views/viewPeople.php');
	require('core/footer.php');
