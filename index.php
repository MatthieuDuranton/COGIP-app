<?php
session_start();

require('lib/inc.php');

require('core/header.php');
if(isset($_GET['action']) && !empty($_GET['action']) && is_file('controllers/'.$_GET['action'].'.php')){
    require('controllers/'.$_GET['action'].'.php');
} else {
	require('controllers/index.php');
}
require('core/footer.php');
