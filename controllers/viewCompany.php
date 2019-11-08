<?php
	require('models/viewCompany.php');

	$title = "Société - ".$dataCompany['company_name'];
	require('core/header.php');
	require('views/viewCompany.php');
	require('core/footer.php');
