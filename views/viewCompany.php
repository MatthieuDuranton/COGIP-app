<h4><?= $dataCompany['company']; ?></h4>
<div class="row">
  <div class="col-12">
    <table class="table">
      <tr>
        <th>N° de TVA</th>
        <th>Pays</th>
        <th>Type de relation</th>
      </tr>
      <tr>
        <td><?= $dataCompany['vat']; ?></td>
        <td><?= $dataCompany['country']; ?></td>
        <td><?= $dataCompany['type']; ?></td>
      </tr>
    </table>
  </div>

  <div class="col-md-6">
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

  <div class="col-md-6">
    <table class="table">
      <tr>
        <th>Nom et Prénom</th>
        <th>Voir</th>
      </tr>
      <?php returnPeopleList($id); ?>
    </table>
  </div>
</div>
