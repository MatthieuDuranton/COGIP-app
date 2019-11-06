<?php
//définir fonction companies pour afficher ceux de la base de donnée
function companies(){
	global $role;

    global $db;

    $companies = $db->query('SELECT company_name, id_company AS id, vat, country.country_name AS country, type.type_name AS type FROM company INNER JOIN country ON company.fk_country = country.id_country INNER JOIN type ON company.fk_type = type.id_type ORDER BY id_company DESC');

    while ($donneeCompanies = $companies->fetch()){
    ?>
	<tr>
        <td><?= $donneeCompanies["company_name"]; ?></td>
        <td><?= $donneeCompanies["vat"]; ?></td>
        <td><?= $donneeCompanies["country"]; ?></td>
        <td><?= $donneeCompanies["type"]; ?></td>
        <?php if($role == 1){ ?>
		<td><a href="?action=edit&type=company&id=<?= $donneeCompanies["id"]; ?>"><i class="fas fa-pen"></i></a></td>
        <td><a href="?action=delete&type=company&id=<?= $donneeCompanies["id"]; ?>"><i class="fas fa-times"></i></a></td>
        <?php } ?>
      </tr>
    <?php
    }
    $companies->closeCursor();
}
