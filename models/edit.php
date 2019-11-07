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

	global $notfill_Err;

	if($_SERVER['REQUEST_METHOD']=="POST"){
		if(isset($type) && !empty($type)){//il y  un type
			if(isset($id) && !empty($id)){
				if($type == "invoice"){//si type = invoice, lancer la fonction d'édition pour invoice
					$ref_Err = $company_Err = $date_Err = $contact_Err = "";
					$ref = $company = $date = $contact = "";

					    if (empty($ref = htmlspecialchars(strip_tags($_POST['reference'])))) {
					        $ref_Err = "Merci d'indiquer une référence";
					    };
					    if (empty($company = htmlspecialchars(strip_tags($_POST['company'])))) {
					        $company_Err = "Merci d'indiquer une société";
					    };
					    if (empty($date = htmlspecialchars(strip_tags($_POST['emissiondate'])))) {
					        $date_Err = "Merci d'indiquer une date";
					    };
					    if (empty($contact = htmlspecialchars(strip_tags($_POST['contact'])))) {
					        $contact_Err = "Merci d'indiquer un contact";
					    };

					    if ($ref_Err == "" AND $company_Err == "" AND $date_Err == "" AND $contact_Err == ""){
					        $req = $db->prepare ("UPDATE invoice SET fk_company = :company, fk_people = :people, invoice_date = :date, reference = :reference WHERE id_invoice = :id");
					        $req->execute(array(
					            'company' => $company,
					            'people' => $contact,
					            'date' => $date,
					            'reference' => $ref,
											'id' => $id
					            ));

					        $ref = $date = $contact = $company = "";

									header('location:?action=invoices');
					    };

	        } else if($type == "people"){//type = people
						$fname_Err = $lname_Err = $email_Err = $company_Err = "";
						$fname = $lname = $email = $company = "";

				    if (empty($fname = htmlspecialchars(strip_tags($_POST['fname'])))) {
				        $fname_Err = "Merci d'indiquer un prénom'";
				    };
				    if (empty($lname = htmlspecialchars(strip_tags($_POST['lname'])))) {
				        $lname_Err = "Merci d'indiquer un nom";
				    };
				    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
				    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
				        $email_Err = "Merci d'indiquer une adresse mail valide";
				    };
				    if (empty($company = htmlspecialchars(strip_tags($_POST['company'])))) {
				        $company_Err = "Merci d'indiquer une société";
				    };


				    if ($fname_Err == "" AND $lname_Err == "" AND $email_Err == "" AND $company_Err == ""){
				        $req = $db->prepare ("UPDATE people SET firstname = :firstname, lastname = :lastname, email = :email, fk_company = :company WHERE id_people = :id");
				        $req->execute(array(
				            'firstname' => $fname,
				            'lastname' => $lname,
				            'email' => $email,
				            'company' => $company,
										'id' => $id
				            ));

				        $fname = $lname = $email = $company = "";

								header('location:?action=people');
				    };
	        } else if($type == "company"){//type = company
							$name_company = $vat = $country = $type = "";
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
				            'country' => $country,
				            'type' => $type,
										'id' => $id
				        ));

				        header('location:?action=companies');

					    };
	        } else if($type == "user"){//type = user

						$username_Err = $password_Err = $email_Err = $fname_Err = $lname_Err = $role_Err = "";
						$user_name = $password = $email = $firstname = $lastname = $fk_role = "";

				    if (empty($user_name = htmlspecialchars(strip_tags($_POST['username'])))) {
				        $username_Err = "Merci d'indiquer un nom d'utilisateur'";
				    };
				    if (empty($password = htmlspecialchars(strip_tags($_POST["password"])))){
				        $password_Err = "Merci d'indiquer un mot de passe.";
				    }

				    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

				    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
				        $email_Err = "Merci d'indiquer une adresse mail valide";
				    };
				    if (empty($firstname = htmlspecialchars(strip_tags($_POST["fname"])))){
				        $fname_Err = "Merci d'indiquer un prénom.";
				    }
				    if (empty($lastname = htmlspecialchars(strip_tags($_POST['lname'])))) {
				        $lname_Err = "Merci d'indiquer un nom";
				    };

				    if (empty($fk_role = htmlspecialchars(strip_tags($_POST["role"])))){
				        $role_Err = "Il faut choisir un champ";
				    }

				    if( $username_Err == "" AND $password_Err == "" AND $email_Err  == "" AND $fname_Err == "" AND $lname_Err == ""){
				        $req = $db->prepare("UPDATE user SET username = :username, password = :password, email = :email, firstname = :firstname, lastname = :lastname, fk_role = :role WHERE id_user = :id");
				        $req -> execute(array(
				            'username' => $user_name,
				            'password' => $password,
				            'email' => $email,
				            'firstname' => $firstname,
				            'lastname' => $lastname,
				            'role' => $fk_role,
										'id' => $id
				        ));
								header('location:?action=user');
							}
				  }
			} else {
				header("location:?action=dashboard");
			}
	    } else {
	        header("location:?action=dashboard");
	    }
	}
}

//fonction edit()
function edit($type) {
    global $db, $type, $id, $q1, $q2, $q3, $q4, $q5, $q6, $t1, $t2, $t3, $t4, $t5, $t6;

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
            $q4 = $donneePeople["fk_company"];
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
							update();
	        } else if($type == "company"){//type = company
	            edit($type);
							update();
	        } else if($type == "user"){//type = user
	            edit($type);
							update();
	        }
		} else {
			header("location:?action=dashboard");
		}
    } else {//il y a une id
        header("location:?action=dashboard");
    }
}
