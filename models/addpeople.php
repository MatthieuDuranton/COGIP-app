<?php
global $db;

$fname_Err = $lname_Err = $email_Err = $company_Err = "";
$fname = $lname = $email = $company = $send_success = "";

if ($_SERVER['REQUEST_METHOD']=="POST"){

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
        $req = $db->prepare ("INSERT INTO people (firstname, lastname, email, fk_company)
        VALUES (:firstname, :lastname, :email, :fk_company)");
        $req->execute(array(
            'firstname' => $fname,
            'lastname' => $lname,
            'email' => $email,
            'fk_company' => $company,
            ));

        $send_success = "Le nouveau contact a bien été ajouté";
        $fname = $lname = $email = $company = "";
    };
};