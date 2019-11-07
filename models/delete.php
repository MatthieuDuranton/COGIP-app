<?php
//pour appeler la variable role
global $role;

//récupération type et id dans l'envoi de l'URL + sanitize
$type = htmlspecialchars(strip_tags($_GET['type']));
$id = htmlspecialchars(strip_tags($_GET['id']));

//fonction erase
function erase(){
    global $db;
    global $type;
    global $id;
    global $send_success;

    if ($type == 'user'){
        $sql = "DELETE FROM user WHERE id_user = $id";
        $db->exec($sql);
        header('location:?action=user');
    };
    if ($type == 'invoice'){
        $sql = "DELETE FROM invoice WHERE id_invoice = $id";
        $db->exec($sql);
        header('location:?action=invoice');
    };
    if ($type == 'people'){
        $sql = "DELETE FROM people WHERE id_people = $id";
        $db->exec($sql);
        header('location:?action=people');
    };
    if ($type == 'company'){
        $sql = "DELETE FROM company WHERE id_company = $id";
        $db->exec($sql);
        header('location:?action=companies');
    };
};

//vérifications des requests et orientation de la fonction edit()
if($role != 1){
    header("location:?action=dasboard");//l'utilisateur a les droits pour visualiser la page
} else {
    if(isset($type) && !empty($type)){//il y  un type
		if(isset($id) && !empty($id)){
			if($type == "invoice"){//si type = invoice, lancer la fonction d'édition pour invoice
                erase();
            } else if($type == "people"){//type = people
                erase();
            } else if($type == "company"){//type = company
                erase();
            } else if($type == "user"){//type = user
                erase();
            }
		} else {
			header("location:?action = dashboard");
		}
    } else {//il y a une id
        header("location:?action = dashboard");
    };
};