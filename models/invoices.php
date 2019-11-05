<?php
//définir $role pour afficher ou non l'ajout de facture
$role = $_SESSION['fk_role'];//

//définir fonction invoices pour afficher celles de la base de donnée
function invoices(){
    global $db;

    $invoices = $db->query('SELECT invoice_date, reference, id_invoice AS id, company.company_name AS company, people.firstname AS firstname, people.lastname AS lastname FROM invoice INNER JOIN company ON invoice.fk_company = company.id_company INNER JOIN people ON invoice.fk_people = people.id_people ORDER BY id_invoice DESC');

    while ($donneeInvoices = $invoices->fetch()){
    ?>
	<tr>
		<td><?= $donneeInvoices["reference"]; ?></td>
        <td><?= $donneeInvoices["company"]; ?></td>
		<td><?= $donneeInvoices["invoice_date"]; ?></td>
        <td><?= $donneeInvoices["firstname"]; ?> <?= $donneeInvoices["lastname"]; ?></td>
		<td><a href="?action=edit&type=invoice&id=<?= $donneeInvoices["id"]; ?>"><i class="fas fa-pen"></i></a></td>
        <td><a href="?action=delete&type=invoice&id=<?= $donneeInvoices["id"]; ?>"><i class="fas fa-times"></i></a></td>
      </tr>
    <?php
    }
    $invoices->closeCursor();
}
