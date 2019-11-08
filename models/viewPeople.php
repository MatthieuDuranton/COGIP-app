<?php
function returnInvoiceList($id){
  global $db;

  // Return results from the DB
  $invoices = $db->query("SELECT id_invoice AS id, reference, invoice_date FROM invoice WHERE fk_people = $id ORDER BY id_invoice DESC");

  // Fetching results
  while($dataInvoices = $invoices->fetch()){ ?>
  <tr>
    <td><?= $dataInvoices["reference"]; ?></td>
    <td><?= $dataInvoices["invoice_date"]; ?></td>
    <td><?= $dataInvoices["firstname"]; ?> <?= $dataInvoices["lastname"]; ?></td>
    <td><a href="?action=viewInvoice&id=<?= $dataInvoices["id"]; ?>"><i class="fas fa-eye"></i></a></td>
  </tr>
  <?php }
  $invoices->closeCursor();
}

function displayPeople(){
  // Check if GET ID is existing and if it is a integer
  if(isset($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT) == true){
    global $db;

    // Sanitizing the GET ID
    global $id;
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    // Return results from the DB
    $people = $db->query("SELECT firstname, lastname, email, fk_company, company.company_name AS company FROM people INNER JOIN company ON people.fk_company = company.id_company WHERE id_people = $id");

    // Fetching results in an array
    global $dataPeople;
    $dataPeople = $people->fetch();

    // Freeing connection to DB
    $people->closeCursor();
  } else {
    // If GET ID is not validate, go to Companies list
    header('location:?action=people');
  }
}

displayPeople();
