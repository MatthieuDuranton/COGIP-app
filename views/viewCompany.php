<h3><?= $dataCompany['company']; ?></h3>
<div class="row">
  <div class="col-12">
    <table class="table">
      <th>
        <td>N° de TVA</td>
        <td>Pays</td>
        <td>Type de relation</td>
      </th>
      <tr>
        <td><?= $dataCompany['vat']; ?></td>
        <td><?= $dataCompany['country']; ?></td>
        <td><?= $dataCompany['type']; ?></td>
      </tr>
    </table>
  </div>

  <div class="col-md-6">
    <table class="table">
      <th>
        <td>Référence</td>
        <td>Date</td>
        <td>Contact</td>
        <td>Voir</td>
      </th>
      <?php function returnInvoiceList($id); ?>
    </table>
  </div>

  <div class="col-md-6">
    <table class="table">
      <th>
        <td>Nom et Prénom</td>
        <td>Voir</td>
      </th>
      <?php function returnPeopleList($id); ?>
    </table>
  </div>
</div>
