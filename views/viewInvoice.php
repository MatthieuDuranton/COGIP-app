<h4>Facture <?= $dataInvoice['reference']; ?></h4>
<div class="row">
  <div class="col-12">
    <table class="table">
      <tr>
        <th>Reference</th>
        <th>Date</th>
        <th>Société</th>
		<th>Type de relation</th>
		<th>Contact</th>
      </tr>
      <tr>
        <td><?= $dataInvoice['reference']; ?></td>
        <td><?= $dataInvoice['invoice_date']; ?></td>
        <td><a href="?action=viewCompany&id=<?= $dataInvoice['fk_company']; ?>"><?= $dataInvoice['company']; ?></a></td>
		<td><?= $dataInvoice['type']; ?></td>
		<td><a href="?action=viewPeople&id=<?= $dataInvoice['fk_people']; ?>"><?= $dataInvoice['firstname']; ?> <?= $dataInvoice['lastname']; ?></a></td>
      </tr>
    </table>
  </div>
</div>
