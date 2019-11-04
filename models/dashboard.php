<?php
function welcome(){

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

    while($donneeContact = $contact->fetch()){

    ?>
	<tr>
        <td><?= $donneeContact["firstname"]; ?></td>
        <td><?= $donneeContact["lastname"]; ?></td>
        <td><?= $donneeContact["email"]; ?></td>
        <td><?php fkSelect("company", $donneeContact["fk_company"], "company_name"); ?></td>
      </tr>
    <?php
    }
    $contact->closeCursor();
}
// requetes vers db => 5 dernières factures
function lastInvoice(){

    global $db;

    $resultInvoice = $db->query('SELECT fk_company, fk_people, invoice_date, reference FROM invoice ORDER BY id_invoice DESC LIMIT 5');

    while($donneeInvoice = $resultInvoice->fetch()){

    ?>
	<tr>
		<td><?= $donneeInvoice["reference"]; ?></td>
        <td><?= fkSelect("company", $donneeInvoice["fk_company"], "company_name"); ?></td>
        <td><?= $donneeInvoice["invoice_date"]; ?></td>
        <td><?php fkSelect("people", $donneeInvoice["fk_people"], "firstname, lastname"); ?></td>
      </tr>
    <?php
    }
    $resultInvoice->closeCursor();
}
// requetes vers db => 5 dernières sociétés
function lastCompany(){

    global $db;

    $resultCompany = $db->query('SELECT company_name, vat, fk_country, fk_type FROM company ORDER BY id_company DESC LIMIT 5');

    while($donneeCompany = $resultCompany->fetch()){

    ?>
	<tr>
        <td><?= $donneeCompany["company_name"]; ?></td>
        <td><?= $donneeCompany["vat"]; ?></td>
		<td><?php fkSelect("country", $donneeCompany["fk_country"], "country") ?></td>
        <td><?php fkSelect("type", $donneeCompany["fk_type"], "typename") ?></td>
      </tr>
    <?php
    }
    $resultCompany->closeCursor();
}
