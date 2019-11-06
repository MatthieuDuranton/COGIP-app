<?php
//définir fonction providers pour afficher ceux de la base de donnée
function providers(){
    global $db;

	global $role;

    $providers = $db->query('SELECT id_company AS id, company_name, vat, country.country_name AS country FROM company INNER JOIN country ON company.fk_country = country.id_country WHERE fk_type = 2');

    while ($donneeProvider = $providers->fetch()){
    ?>
	<tr>
        <td><?= $donneeProvider["company_name"]; ?></td>
        <td><?= $donneeProvider["vat"]; ?></td>
        <td><?= $donneeProvider["country"]; ?></td>
		<?php if($role == 1){?>
		<td><a href="?action=edit&type=company&id=<?= $donneeProvider["id"]; ?>"><i class="fas fa-pen"></i></a></td>
        <td><a href="?action=delete&type=company&id=<?= $donneeProvider["id"]; ?>"><i class="fas fa-times"></i></a></td>
		<?php } ?>
      </tr>
    <?php
    }
    $providers->closeCursor();
}
