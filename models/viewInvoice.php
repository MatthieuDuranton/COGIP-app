<?php
function displayInvoice(){
  // Check if GET ID is existing and if it is a integer
  if(isset($_GET['id']) && filter_var($_GET['id'], FILTER_VALIDATE_INT) == true){
    global $db;

    // Sanitizing the GET ID
    global $id;
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    // Return results from the DB
    $invoice = $db->query("SELECT invoice_date, reference, invoice.fk_company, invoice.fk_people, company.company_name AS company, people.firstname AS firstname, people.lastname AS lastname, type.type_name AS type FROM invoice INNER JOIN company ON invoice.fk_company = company.id_company INNER JOIN people ON invoice.fk_people = people.id_people INNER JOIN type ON company.fk_type = type.id_type WHERE id_invoice = $id");

    // Fetching results in an array
    global $dataInvoice;
    $dataInvoice = $invoice->fetch();

    // Freeing connection to DB
    $invoice->closeCursor();
  } else {
    // If GET ID is not validate, go to Companies list
    header('location:?action=invoices');
  }
}

displayInvoice();
