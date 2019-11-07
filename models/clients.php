<?php
//définir fonction client pour afficher ceux de la base de donnée
function clients(){
    global $db;

	global $role;

    $clients = $db->query('SELECT id_company AS id, company_name, vat, country.country_name AS country FROM company INNER JOIN country ON company.fk_country = country.id_country WHERE fk_type = 1');

    while ($donneeClient = $clients->fetch()){
    ?>
	<tr>
        <td><?= $donneeClient["company_name"]; ?></td>
        <td><?= $donneeClient["vat"]; ?></td>
        <td><?= $donneeClient["country"]; ?></td>
		<?php if($role == 1){?>
		<td><a href="?action=editClient&type=company&id=<?= $donneeClient["id"]; ?>"><i class="fas fa-pen"></i></a></td>
        <td><a href="?action=delete&type=company&id=<?= $donneeClient["id"]; ?>"><i class="fas fa-times"></i></a></td>
		<?php } ?>
      </tr>
    <?php
    }
    $clients->closeCursor();
}
