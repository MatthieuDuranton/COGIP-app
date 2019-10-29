<?php
	try{
		$db = new PDO ("mysql:host=localhost; dbname=cogp; charset=utf8', root, ");
	} catch(Exception $e){
		die("Erreur:".$e->getmessage());
	}
