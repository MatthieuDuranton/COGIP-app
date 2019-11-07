<?php
//pour appeler la variable role
global $role;

//message de succés
$send_success = "Les données ont bien été modifiées";

//récupération type et id dans l'envoi de l'URL + sanitize
$type = htmlspecialchars(strip_tags($_GET['type']));
$id = htmlspecialchars(strip_tags($_GET['id']));

//fonction edit()
function edit($type) {
    global $db;
    global $type;
    global $id;
    global $send_success;
    global $q1;
    global $q2;
    global $q3;
    global $q4;
    global $q5;
    global $q6;
    global $t1;
    global $t2;
    global $t3;
    global $t4;
    global $t5;
    global $t6;

    if ($type == "invoice"){
        //Variables pour les titres
        $t1 = "Référence";
        $t2 = "Société";
        $t3 = "Date d'émission";
        $t4 = "Personne de contact";
        $t5 = "";
        $t6 = "";
        //Récupérer les données de la facture à changer
        $invoices = $db->query("SELECT invoice_date, reference, fk_company, fk_people FROM invoice WHERE id_invoice = $id");
        while ($donneeInvoices = $invoices->fetch()){
            $q1 = $donneeInvoices["reference"];
            $q2 = $donneeInvoices["fk_company"];
            $q3 = $donneeInvoices["invoice_date"];
            $q4 = $donneeInvoices["fk_people"];
            $q5 = "";
            $q6 = "";
        };
        $invoices->closeCursor();
    };
    if ($type == "company"){
        //Variables pour les titres
        $t1 = "Nom";
        $t2 = "N° de TVA";
        $t3 = "Nationalité";
        $t4 = "Type de relations";
        $t5 = "";
        $t6 = "";
        //Récupérer les données de la société à changer
        $companies = $db->query("SELECT company_name, vat, country.country_name AS country, type.type_name AS type FROM company INNER JOIN country ON company.fk_country = country.id_country INNER JOIN type ON company.fk_type = type.id_type WHERE id_company = $id");
        while ($donneeCompanies = $companies->fetch()){
            $q1 = $donneeCompanies["company_name"];
            $q2 = $donneeCompanies["vat"];
            $q3 = $donneeCompanies["country"];
            $q4 = $donneeCompanies["type"];
            $q5 = "";
            $q6 = "";
        };
        $companies->closeCursor();
    };
    if ($type == "people"){
        //Variables pour les titres
        $t1 = "Nom de famille";
        $t2 = "Prénom";
        $t3 = "Email";
        $t4 = "Société";
        $t5 = "";
        $t6 = "";
        //Récupérer les données du contact à changer
        $people = $db->query("SELECT firstname, lastname, email, company.company_name AS company FROM people INNER JOIN company ON people.fk_company = company.id_company WHERE id_people = $id");
        while ($donneePeople = $people->fetch()){
            $q1 = $donneePeople["firstname"];
            $q2 = $donneePeople["lastname"];
            $q3 = $donneePeople["company"];
            $q4 = "";
            $q5 = $donneePeople["email"];
            $q6 = "";
        };
        $people->closeCursor();
    };
    if ($type == "user"){
        //Variables pour les titres
        $t1 = "Nom d'utilisateur";
        $t2 = "Mot de passe";
        $t3 = "Prénom";
        $t4 = "Nom de famille";
        $t5 = "Email";
        $t6 = "Niveau d'autorisation";
        //Récupérer les données du contact à changer
        $user = $db->query("SELECT firstname, lastname, email, username, role.role_name AS role FROM user INNER JOIN role ON user.fk_role = role.role_name WHERE id_user = $id");
        while ($donneeUser = $user->fetch()){
            $q1 = $donneeUser["username"];
            $q2 = "Password";
            $q3 = $donneeUser["firstname"];
            $q4 = $donneeUser["lastname"];
            $q5 = $donneeUser["email"];
            $q6 = $donneeUser["role"];
        };
        $user->closeCursor();
    };
};

//vérifications des requests et orientation de la fonction edit()
if($role != 1){
    header("location:?action=dasboard");//l'utilisateur a les droits pour visualiser la page
} else {
    if(isset($type) && !empty($type)){//il y  un type
		if(isset($id) && !empty($id)){
			if($type == "invoice"){//si type = invoice, lancer la fonction d'édition pour invoice
	            edit($type);
	        } else if($type == "people"){//type = people
	            edit($type);
	        } else if($type == "company"){//type = company
	            edit($type);
	        } else if($type == "user"){//type = user
	            edit($type);
	        }
		} else {
			header("location:?action = dasboard");
		}
    } else {//il y a une id
        header("location:?action = dasboard");
    }
}
