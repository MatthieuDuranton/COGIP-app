<?php
session_start();

if(isset($_GET['action']) && !empty($_GET['action']) && is_file('controllers/'.$_GET['action'].'.php')){
    require('controllers/'.$_GET['page'].'.php');
} else {
	require('controllers/index.php');
}
