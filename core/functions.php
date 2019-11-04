<?php
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

	function fkSelect($table, $foreignKeyID, $column){
		global $db;
	    $query = $db->query('SELECT * FROM '.$table.' WHERE id_'.$table.' = '.$foreignKeyID);
		$result = $query->fetch();

		$column = explode(", ", $column);
		foreach ($column as $key) {
			echo $result[$key]." ";
		}
	}

	function fkOption($table, $column){
		global $db;
	    $query = $db->query('SELECT * FROM '.$table.' ORDER BY id_'.$table);

		if($table == "people"){
			$column = explode(", ", $column);
			$column0 = $column[0];
			$column1 = $column[1];
			$column2 = $column[2];

			while($result = $query->fetch(PDO::FETCH_ASSOC)){
				echo '<option value="'.$result[$column0].'">'.$result[$column1].' '.$result[$column2].'</option>';
			}
		} else {
			$column = explode(", ", $column);
			$column0 = $column[0];
			$column1 = $column[1];

			while($result = $query->fetch(PDO::FETCH_ASSOC)){
				echo '<option value="'.$result[$column0].'">'.$result[$column1].'</option>';
			}
		}
	}
