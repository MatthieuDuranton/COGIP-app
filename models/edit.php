<?php
//pour appeler la variable role
global $role;

//récupération type et id dans l'envoi de l'URL + sanitize
$type = htmlspecialchars(strip_tags($_GET['type']));
$id = htmlspecialchars(strip_tags($_GET['id']));

//fonction edit()
function edit() {
    global $db;
    if ($type = invoice){
        $t1 = "Référence";
        $t2 = "Société";
        $t3 = "Date d'émission";
        $t4 = "Personne de contact"
    }
}

//vérifications des requests et orientation de la fonction edit()
if ($_role != 1){
    header("location:?action = dasboard");//l'utilisateur a les droits pour visualiser la page
}else if{
    if (isset($type) && empty($type)){//il y  un type
        header("location:?action = dasboard");
    }else if (isset($id) && empty($id)){//il y a une id
        header("location:?action = dasboard");
    }else{
        if ($type == "invoice"){//si type = invoice, lancer la fonction d'édition pour invoice
            edit("invoice");
        }else if ($type == "people"){
            ?>
            <tr>
                <th>Nom de famille</th>
                <th>Prénom</th>
                <th>Email</th>
                <th>Société</th>
            </tr>
            <?php
            edit("people");
        }else if ($type == "company"){
            ?>
            <tr>
                <th>Nom</th>
                <th>N° de TVA</th>
                <th>Nationalité</th>
                <th>Type de relations</th>
            </tr>
            <?php
            edit("company");
        }else if ($type == "user"){
            ?>
            <tr>
                <th>Nom d'utilisateur</th>
                <th>Mot de passe</th>
                <th>email</th>
                <th>Prénom</th>
                <th>Nom de famille</th>
                <th>Niveau d'autorisation</th>
            </tr>
            <?php
            edit("user");
        };
    };
}else{
    header("location:?action = dasboard");//si aucun type prédéfini ne correspond à celui appelé par le user
};

