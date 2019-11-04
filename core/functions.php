<?php
	function fkSelect($table, $foreignKeyID, $column){
		global $db;
	    $query = $db->query('SELECT * FROM '.$table.' WHERE id_'.$table.' = '.$foreignKeyID);
		$result = $query->fetch();

		$column = explode(", ", $column);
		foreach ($column as $key) {
			echo $result[$key]." ";
		}
	}

	function welcome(){

	    global $user_Fname, $user_Lname, $user_rights, $rights;

	    $user_Fname = $_SESSION['firstname'];
	    $user_Lname = $_SESSION['lastname'];
	    $user_rights = $_SESSION['fk_role'];

		if($user_rights == 1){
			echo "Bienvenue Grand Maître ".$user_Fname." ".$user_Lname;
		} else {
			echo "Bienvenue ".$user_Fname." ".$user_Lname;
		}

	}
