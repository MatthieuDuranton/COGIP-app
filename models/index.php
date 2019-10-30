<?php
//Check username & password. Fetch user informations for connection
function connection($username, $password){
	global $db;
	
    if ($_SERVER['REQUEST_METHOD']=="POST"){
		$username = htmlspecialchars(strip_tags($username));
		$password = trim($password);

		global $username_empty, $password_empty, $username_err, $session_err;

        if (empty($username)) {//$username = $_POST['username'] ; check if the input username is filled
            $username_empty = "Bonjour, vous devez indiquer un nom d'utilisateur";
        }

		if (empty($password)) {//$password = $_POST['password'] ; check if the input password is filled
		    $password_empty = "Bonjour, vous devez indiquer votre mot de passe";
		}

		$sth = $db->prepare('SELECT COUNT(*) as nb FROM user WHERE username = :username');//try to retrieve the username txs to $username
		$sth->execute(array('username' => $username));
		$row = $sth -> fetch();

		if($row["nb"] == 0){
			$username_err = "Désolé, ce nom d'utilisateur n'est pas reconnu";
		}

		if(!isset($username_empty) AND !isset($password_empty) AND !isset($username_err)){
            $req = $db->prepare('SELECT * FROM user WHERE username = :username');//try to connect to DB thanks to the username
            $req->execute(array('username' => $username));
            $res = $req->fetch();
            if ($password == $res["password"]){//check if password is valid ; to use as long as the password is not secured
            //if(password_verify($password, $res["password"])){//check if password is valid ; to use once password is secured
                $_SESSION['username'] = $res['username'];//if true : Link the user's infos to the session
                $_SESSION['firstname'] = $res['firstname'];
                $_SESSION['lastname'] = $res['lastname'];
                $_SESSION['fk_role'] = $res['fk_role'];

                header("location:?action=dashboard");//if true : moves user to the dashboard

            } else {
                $session_err = "Désolé, le nom d'utilisateur et le mot de passe ne correspondent pas";
            };
        };
    };
};
