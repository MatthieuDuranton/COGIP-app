<?php
global $db;

$ref_Err = $company_Err = $date_Err = $contact_Err = "";
$ref = $company = $date = $contact = $send_success = "";

if ($_SERVER['REQUEST_METHOD']=="POST"){

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
        $req = $db->prepare ("INSERT INTO invoice (fk_company, fk_people, invoice_date, reference)
        VALUES (:company, :contact, :date, :reference)");
        $req->execute(array(
            'company' => $company,
            'contact' => $contact,
            'date' => $date,
            'reference' => $ref,
            ));

        $send_success = "La nouvelle facture a bien été ajoutée";
        $ref = $date = $contact = $company = "";
    };
};