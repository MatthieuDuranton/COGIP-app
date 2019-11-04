<?php
global $db;

$notfill_Err = $email_Err = "";
$fname = $lname = $email = $company = "";

if ($_SERVER['REQUEST_METHOD']=="POST"){

    if ($_SERVER['REQUEST_METHOD']=="POST"){
        if (empty($fname = htmlspecialchars(strip_tags($_POST['fname'])))) {
            $notfill_Err = "Merci de remplir ce champ";
        };
        if (empty($lname = htmlspecialchars(strip_tags($_POST['lname'])))) {
            $notfill_Err = "Merci de remplir ce champ";
        };
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $email_Err = "Merci d'indiquer une adresse mail valide";
        };
        if (empty($company = htmlspecialchars(strip_tags($_POST['company'])))) {
            $notfill_Err = "Merci de remplir ce champ";
        };
    };

    if ($notfill_Err == "" AND $email_Err == ""){
        $req = $db->prepare ("INSERT INTO people (firstname, lastname, email, fk_company)
        VALUES (:firstname, :lastname, :email, :fk_company)");
        $req->execute(array(
            'firstname' => $fname,
            'lastname' => $lname,
            'email' => $email,
            'fk_company' => $company,
            ));
    };
};