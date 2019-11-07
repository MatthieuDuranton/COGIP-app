<?php
//pour appeler la variable role
global $role;

//message de succès
$send_success = "";

//récupération type et id dans l'envoi de l'URL + sanitize
$type = htmlspecialchars(strip_tags($_GET['type']));
$id = htmlspecialchars(strip_tags($_GET['id']));

function update(){
	global $db;

	global $type, $id;

	if($_SERVER['REQUEST_METHOD']=="POST"){
		if(isset($type) && !empty($type)){//il y  un type
			if(isset($id) && !empty($id)){
				if($type == "invoice"){//si type = invoice, lancer la fonction d'édition pour invoice
					$name_company = $vat = $country = $type = $send_success = "";
				    $notfill_Err ="";

		            if (empty($name_company = htmlspecialchars(strip_tags($_POST['name_company'])))) {
		                $notfill_Err = "Merci de remplir ce champ";
		            };
		            if (empty($vat = htmlspecialchars(strip_tags($_POST['vat'])))) {
		                $notfill_Err = "Merci de remplir ce champ";
		            };
		            if (empty($country = htmlspecialchars(strip_tags($_POST['country'])))) {
		                $email_Err = "Merci d'indiquer une nationalité valide";
		            };
		            if (empty($type = htmlspecialchars(strip_tags($_POST['type'])))) {
		                $notfill_Err = "Merci de choisir un champ";
		            };

			        if ($notfill_Err == ""){
			        $req = $db->prepare("UPDATE company SET company_name = :company_name, vat = :vat, fk_country = :country, fk_type = :type WHERE id_company = :id");
			        $req->execute(array(
			            'company_name' => $name_company,
			            'vat' => $vat,
			            'fk_country' => $country,
			            'fk_type' => $type,
						'id' => $id
			        ));

			        $send_success ="La société a bien été modifiée";
			        $name_company = $vat = $country = $type = "";

				    };
		        } else if($type == "people"){//type = people

		        } else if($type == "company"){//type = company

		        } else if($type == "user"){//type = user

		        }
			} else {
				header("location:?action=dashboard");
			}
	    } else {//il y a une id
	        header("location:?action=dashboard");
	    }
	}

}

//fonction edit()
function edit($type) {
    global $db;
    global $type;
    global $id;
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
        $companies = $db->query("SELECT company_name, vat, fk_country, fk_type FROM company WHERE id_company = $id");
        while ($donneeCompanies = $companies->fetch()){
            $q1 = $donneeCompanies["company_name"];
            $q2 = $donneeCompanies["vat"];
            $q3 = $donneeCompanies["fk_country"];
            $q4 = $donneeCompanies["fk_type"];
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
        $people = $db->query("SELECT firstname, lastname, email, fk_company FROM people WHERE id_people = $id");
        while ($donneePeople = $people->fetch()){
            $q1 = $donneePeople["firstname"];
            $q2 = $donneePeople["lastname"];
			$q3 = $donneePeople["email"];
            $q4 = $donneePeople["company"];
            $q5 = "";
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
        $user = $db->query("SELECT firstname, lastname, password, email, username, fk_role FROM user WHERE id_user = $id");
        while ($donneeUser = $user->fetch()){
            $q1 = $donneeUser["username"];
            $q2 = $donneeUser["password"];
            $q3 = $donneeUser["firstname"];
            $q4 = $donneeUser["lastname"];
            $q5 = $donneeUser["email"];
            $q6 = $donneeUser["fk_role"];
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
				update();
	        } else if($type == "people"){//type = people
	            edit($type);
	        } else if($type == "company"){//type = company
	            edit($type);
	        } else if($type == "user"){//type = user
	            edit($type);
	        }
		} else {
			header("location:?action=dashboard");
		}
    } else {//il y a une id
        header("location:?action=dashboard");
    }
}
