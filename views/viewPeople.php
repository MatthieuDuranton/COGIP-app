<h4>Contact : <?= $dataPeople['firstname']; ?> <?= $dataPeople['lastname']; ?></h4>
<div class="row">
  <div class="col-12">
    <table class="table">
      <tr>
        <th>Identité</th>
        <th>E-mail</th>
        <th>Société</th>
      </tr>
      <tr>
		<td><?= $dataPeople['firstname']; ?> <?= $dataPeople['lastname']; ?></td>
		<td><?= $dataPeople['email']; ?></td>
		<td><a href="?action=viewCompany&id=<?= $dataPeople['fk_company']; ?>"><?= $dataPeople['company']; ?></a></td>
      </tr>
    </table>
  </div>

  <div class="col-12">
    <table class="table">
      <tr>
        <th>Référence</th>
        <th>Date</th>
        <th>Contact</th>
        <th>Voir</th>
      </tr>
      <?php returnInvoiceList($id); ?>
    </table>
  </div>
</div>
