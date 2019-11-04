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
