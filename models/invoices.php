<?php
//définir $role pour afficher ou non l'ajout de facture
$role = $_SESSION['fk_role'];//

//définir fonction invoices pour afficher celles de la base de donnée
function invoices(){
    global $db;

    $invoices = $db->query('SELECT * FROM invoice WHERE fk_type = 2');

    while ($donneeInvoices = $invoices->fetch()){
    ?>
	<tr>
        <td><?= $donneeInvoices["fk_company"]; ?></td>
        <td><?= $donneeInvoices["fk_people"]; ?></td>
        <td><?= $donneeInvoices["invoice_date"]; ?></td>
        <td><?= $donneeInvoices["reference"]; ?></td>
      </tr>
    <?php
    }
    $invoices->closeCursor();
}