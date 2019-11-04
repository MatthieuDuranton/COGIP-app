<?php
//définir $role pour afficher ou non l'ajout de client
$role = $_SESSION['fk_role'];//

//définir fonction companies pour afficher ceux de la base de donnée
function companies(){
    $role = $_SESSION['fk_role'];
    global $db;

    $companies = $db->query('SELECT * FROM company');

    while ($donneeCompanies = $companies->fetch()){
    ?>
	<tr>
        <td><?= $donneeCompanies["company_name"]; ?></td>
        <td><?= $donneeCompanies["vat"]; ?></td>
        <td><?= $donneeCompanies["fk_country"]; ?></td>
        <td><?= $donneeCompanies["fk_type"]; ?></td>
        <?php if ($role == 1){?>
        <td><a href="?action=editCompany">Modifier</a></td>
        <td></td>
        <?php } ?>
      </tr>
    <?php
    }
    $companies->closeCursor();
}