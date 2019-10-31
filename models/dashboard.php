<?php
function welcome($username){
    global $db;

    global $user_Fname, $user_Lname, $user_rights, $rights;

    $user_Fname = $_SESSION['firstname'];
    $user_Lname = $_SESSION['lastname'];
    $user_rights = $_SESSION['fk_role'];  // 

    if($user_rights==1){
        $rights = "admin";
    }
    elseif($user_rights ==2){
        $rights = "modo";
    }
    else{
        $rights = "stagiaire";
    }
   
}
// 3 requetes vers bd , 5 derniers contacts 5 dern facts , 5 company

function lastContact(){
    
    global $db;

    $contact = $db->query('SELECT firstname, lastname, email, fk_company FROM people ORDER BY DESC LIMIT 5'); 
    $donneeContact = $contact->fetch();

    while($donneeContact = $contact ->fetch()){
    
    ?><tr>
        <td><? echo $donneeContact["firstname"]; ?></td>
        <td><? echo $donneeContact["lastname"]; ?></td>
        <td><? echo $donneeContact["email"]; ?></td>
        <td><? echo $donneeContact["fk_company"]; ?></td>
      </tr>
    <?
    }
    $contact->closeCursor();
}