<?php
//définir $role pour afficher ou non l'ajout de client
$role = $_SESSION['fk_role'];//

//définir fonction client pour afficher ceux de la base de donnée
function clients(){
    global $db;

    $clients = $db->query('SELECT * FROM company WHERE fk_type = 1');

    while ($donneeClient = $clients->fetch()){
    ?>
	<tr>
        <td><?= $donneeClient["company_name"]; ?></td>
        <td><?= $donneeClient["vat"]; ?></td>
        <td><?= $donneeClient["fk_country"]; ?></td>
        <td><?= $donneeClient["fk_type"]; ?></td>
      </tr>
    <?php
    }
    $clients->closeCursor();
}