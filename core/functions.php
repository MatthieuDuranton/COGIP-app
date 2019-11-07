<?php
	$user_Fname = $_SESSION['firstname'] ?? NULL;
	$user_Lname = $_SESSION['lastname'] ?? NULL;
	$user_id = $_SESSION['userid'] ?? NULL;
	$role = $_SESSION['fk_role'] ?? NULL;

	function lastConnected(){
		global $db;

		global $user_Fname, $user_Lname, $role, $user_id;

        $req = $db->prepare("UPDATE user SET last_connected = CURRENT_TIMESTAMP WHERE id_user = :userid");
        $req->execute(array(
			'userid' => $user_id
		));
	}

	lastConnected();

	function welcome(){
		global $user_Fname, $user_Lname, $role, $user_id;

		if($role == 1){
			echo "Bienvenue Grand Maître ".$user_Fname." ".$user_Lname;
		} else {
			echo "Bienvenue ".$user_Fname." ".$user_Lname;
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

	function feedback($arg, $type = "success"){
		if(isset($arg) && !empty($arg)){
			?>
				<div class="alert alert-<?= $type; ?>" role="alert">
					<?= $arg; ?>
				</div>
			<?php
		}
	}
