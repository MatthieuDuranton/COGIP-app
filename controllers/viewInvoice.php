<?php
	require('models/viewInvoice.php');

	$title = "Invoice - ".$dataInvoice['reference'];
	require('core/header.php');
	require('views/viewInvoice.php');
	require('core/footer.php');
