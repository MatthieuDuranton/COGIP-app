<?php

global $db;

$username_Err = $password_Err = $email_Err = $fname_Err = $lname_Err = $role_Err = "";
$user_name = $password = $email = $firstname = $lastname = $fk_role = $send_success="";

if ($_SERVER['REQUEST_METHOD']=="POST"){

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

    if (empty($fk_role = htmlspecialchars(strip_tags($_POST["fk_role"])))){
        $role_Err = "Il faut choisir un champ";
    }

    //Demander pour le FK_role

    if( $username_Err == "" AND $password_Err == "" AND $email_Err  == "" AND $fname_Err == "" AND $lname_Err == ""){

        $req = $db->prepare("INSERT INTO user( username, password, email, firstname, lastname, fk_role)
        VALUES (:username, :password, :email, :firstname, :lastname, :fk_role) ");
        $req -> execute(array(
            'username' => $user_name,
            'password' => $password,
            'email' => $email,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'fk_role' => $fk_role,
        ));
    }
    $send_success = "Le nouvel utilisateur a bien été ajouté";
}
