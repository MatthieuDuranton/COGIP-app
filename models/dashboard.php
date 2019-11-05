<?php
// requetes vers bd => 5 derniers contacts
function lastContact(){

    global $db;

    $contact = $db->query('SELECT firstname, lastname, email, company.company_name AS company FROM people INNER JOIN company ON people.fk_company = company.id_company ORDER BY id_people DESC LIMIT 5');

    while($donneeContact = $contact->fetch()){

    ?>
	<tr>
        <td><?= $donneeContact["firstname"]; ?></td>
        <td><?= $donneeContact["lastname"]; ?></td>
        <td><?= $donneeContact["email"]; ?></td>
        <td><?= $donneeContact["company"]; ?></td>
    </tr>
    <?php
    }
    $contact->closeCursor();
}
// requetes vers db => 5 dernières factures
function lastInvoice(){

    global $db;

    $resultInvoice = $db->query('SELECT invoice_date, reference, company.company_name AS company, people.firstname AS firstname, people.lastname AS lastname FROM invoice INNER JOIN company ON invoice.fk_company = company.id_company INNER JOIN people ON invoice.fk_people = people.id_people ORDER BY id_invoice DESC LIMIT 5');

    while($donneeInvoice = $resultInvoice->fetch()){

    ?>
	<tr>
		<td><?= $donneeInvoice["reference"]; ?></td>
        <td><?= $donneeInvoice["company"]; ?></td>
        <td><?= $donneeInvoice["invoice_date"]; ?></td>
		<td><?= $donneeInvoice["firstname"]; ?> <?= $donneeInvoice["lastname"]; ?></td>
      </tr>
    <?php
    }
    $resultInvoice->closeCursor();
}
// requetes vers db => 5 dernières sociétés
function lastCompany(){

    global $db;

    $resultCompany = $db->query('SELECT company_name, vat, country.country_name AS country, type.type_name AS type FROM company INNER JOIN country ON company.fk_country = country.id_country INNER JOIN type ON company.fk_type = type.id_type ORDER BY id_company DESC LIMIT 5');

    while($donneeCompany = $resultCompany->fetch()){

    ?>
	<tr>
        <td><?= $donneeCompany["company_name"]; ?></td>
        <td><?= $donneeCompany["vat"]; ?></td>
		<td><?= $donneeCompany["country"]; ?></td>
        <td><?= $donneeCompany["type"]; ?></td>
      </tr>
    <?php
    }
    $resultCompany->closeCursor();
}
