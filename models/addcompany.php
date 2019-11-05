<?php

    $name_company = $vat = $country = $type = $send_success = "";
    $notfill_Err ="";
    global $db;

        if ($_SERVER['REQUEST_METHOD']=="POST"){
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
        $req = $db->prepare("INSERT INTO company(company_name, vat, fk_country, fk_type)
        VALUES(:company_name, :vat, :fk_country, :fk_type)");
        $req->execute(array(

            'company_name' => $name_company,
            'vat' => $vat,
            'fk_country' => $country,
            'fk_type' => $type,
        ));

         $send_success ="La nouvelle société a bien été ajoutée";
         $name_company = $vat = $country = $type = "";

    };

};
