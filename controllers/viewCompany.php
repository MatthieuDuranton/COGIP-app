<?php
	require('models/viewCompany.php');

	$title = "Société - ".$dataCompany['company'];
	require('core/header.php');
	require('views/viewCompany.php');
	require('core/footer.php');
