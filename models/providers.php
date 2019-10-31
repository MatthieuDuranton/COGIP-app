<?php
//définir $role pour afficher ou non l'ajout de client
$role = $_SESSION['fk_role'];//

//définir fonction client pour afficher ceux de la base de donnée
function providers(){
    global $db;

    $providers = $db->query('SELECT * FROM company WHERE fk_type = 2');

    while ($donneeProvider = $clients->fetch()){
    ?>
	<tr>
        <td><?= $donneeProvider["company_name"]; ?></td>
        <td><?= $donneeProvider["vat"]; ?></td>
        <td><?= $donneeProvider["fk_country"]; ?></td>
        <td><?= $donneeProvider["fk_type"]; ?></td>
      </tr>
    <?php
    }
    $providers->closeCursor();
}