<?php
function returnInvoiceList($id){
  global $db;

  // Return results from the DB
  $invoices = $db->query("SELECT id_invoice AS id, reference, invoice_date, people.firstname AS firstname, people.lastname AS lastname FROM invoice INNER JOIN people ON invoice.fk_people = people.id_people WHERE fk_company = $id ORDER BY id_invoice DESC");

  // Fetching results
  while ($dataInvoices = $invoices->fetch()){ ?>
  <tr>
    <td><?= $dataInvoices["reference"]; ?></td>
    <td><?= $dataInvoices["invoice_date"]; ?></td>
    <td><?= $dataInvoices["firstname"]; ?> <?= $dataInvoices["lastname"]; ?></td>
    <td><a href="?action=viewInvoice&id=<?= $dataInvoices["id"]; ?>"><i class="fas fa-eye"></i></a></td>
  </tr>
  <?php }
  $invoices->closeCursor();
}

function returnPeopleList($id){
  global $db;

  // Return results from the DB
  $peoples = $db->query("SELECT firstname, lastname, id_people AS id FROM people WHERE fk_company = $id ORDER BY id_people DESC");

  // Fetching results
  while ($dataPeople = $peoples->fetch()){ ?>
    <tr>
      <td><?= $dataPeople["firstname"]; ?> <?= $dataPeople["lastname"]; ?></td>
      <td><a href="?action=viewPeople&id=<?= $dataPeople["id"]; ?>"><i class="fas fa-eye"></i></a></td>
    </tr>
  <?php }
  $peoples->closeCursor();
}

function displayCompany(){
  // Check if GET ID is existing and if it is a integer
  if(isset($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT)){
    global $db;

    // Sanitizing the GET ID
    $id = filter_var($_GET['id'], FILTER_SANITIZE_INT);

    // Return results from the DB
    $company = $db->query("SELECT company_name AS company, vat, country.country_name AS country, type.type_name AS type FROM company INNER JOIN country ON company.fk_country = country.id_country INNER JOIN type ON company.fk_type = type.id_type WHERE id_company = $id");

    // Fetching results in an array
    $dataCompany = $company->fetch();

    // Freeing connection to DB
    $company->closeCursor();
  } else {
    // If GET ID is not validate, go to Companies list
    header('location:?action=companies')
  }
}

displayCompany();
