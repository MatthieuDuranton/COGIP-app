<?php

    $name_company = $tva = $nationalité = $role = "";
    $notfill_Err ="";
    global $db;
    

    

        if ($_SERVER['REQUEST_METHOD']=="POST"){
            if (empty($name_company = htmlspecialchars(strip_tags($_POST['name_company'])))) {
                $notfill_Err = "Merci de remplir ce champ";
            };
            if (empty($tva = htmlspecialchars(strip_tags($_POST['tva'])))) {
                $notfill_Err = "Merci de remplir ce champ";
            };
            if (empty($nationalité = htmlspecialchars(strip_tags($_POST['nationalité'])))) {
                $email_Err = "Merci d'indiquer une nationalité valide";
            };
            if (empty($role = htmlspecialchars(strip_tags($_POST['role'])))) {
                $notfill_Err = "Merci de choisir un champ";
            };
        
       
        if ($notfill_Err == ""){
        $req = $db->prepare("INSERT INTO company(company_name, vat, fk_country, fk_type) 
        VALUES(:company_name, :vat, :fk_country, :fk_type)");
        $req->execute(array(

            'company_name' => $name_company,
            'vat' => $tva,
            'fk_country' => $nationalité,
            'fk_type' => $role,
        ));

         $send_success ="La compagnie a été ajoutée."; 
         $name_company = $tva = $nationalité = $role = "";

    };

};

        

        