<?php
function welcome($username){
    global $db;

    global $user_Fname, $user_Lname, $user_rights, $rights;

    $user_Fname = $_SESSION['firstname'];
    $user_Lname = $_SESSION['lastname'];
    $user_rights = $_SESSION['fk_role'];

    echo "bienvenue".$user_Fname." ".$user_Lname;

}
// requetes vers bd => 5 derniers contacts

function lastContact(){

    global $db;

    $contact = $db->query('SELECT firstname, lastname, email, fk_company FROM people ORDER BY id_people DESC LIMIT 5');
    $donneeContact = $contact->fetch();

    while($donneeContact = $contact ->fetch()){

    ?>
	<tr>
        <td><? echo $donneeContact["firstname"]; ?></td>
        <td><? echo $donneeContact["lastname"]; ?></td>
        <td><? echo $donneeContact["email"]; ?></td>
        <td><? echo $donneeContact["fk_company"]; ?></td>
      </tr>
    <?php
    }
    $contact->closeCursor();
}
// requetes vers db => 5 dernières factures
function lastInvoice(){

    global $db;

    $resultInvoice = $db->query('SELECT fk_company, fk_people, invoice_date, reference FROM invoice ORDER BY id_invoice DESC LIMIT 5');
    $donneeInvoice = $resultInvoice->fetch();

    while($donneeInvoice = $resultInvoice ->fetch()){

    ?>
	<tr>
		<td><? echo $donneeInvoice["reference"]; ?></td>
        <td><? echo $donneeInvoice["fk_company"]; ?></td>
        <td><? echo $donneeInvoice["fk_people"]; ?></td>
        <td><? echo $donneeInvoice["invoice_date"]; ?></td>
      </tr>
    <?php
    }
    $resultInvoice->closeCursor();
}
// requetes vers db => 5 dernières sociétés
function lastCompany(){

    global $db;

    $resultCompany = $db->query('SELECT company_name, vat, fk_country, fk_type FROM company ORDER BY id_company DESC LIMIT 5');
    $donneeCompany = $resultCompany->fetch();

    while($donneeCompany = $resultCompany ->fetch()){

    ?>
	<tr>
        <td><? echo $donneeCompany["company_name"]; ?></td>
        <td><? echo $donneeCompany["vat"]; ?></td>
		<td><? echo $donneeCompany["fk_country"]; ?></td>
        <td><? echo $donneeCompany["fk_type"]; ?></td>
      </tr>
    <?php
    }
    $resultCompany->closeCursor();
}
