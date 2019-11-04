<?php
session_start();

require('lib/inc.php');

	if(isset($_SESSION['logged']) && $_SESSION['logged'] == true){
		if(isset($_GET['action']) && !empty($_GET['action']) && is_file('controllers/'.$_GET['action'].'.php')){
			require('controllers/'.$_GET['action'].'.php');
		} else {
			header('location:?action=dashboard');
		}
	} else {
		require('controllers/index.php');
	}
