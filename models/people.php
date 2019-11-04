<?php
//définir $role pour afficher ou non l'ajout de contact
$role = $_SESSION['fk_role'];//

//définir fonction people pour afficher ceux de la base de donnée
function people(){
    global $db;

    $people = $db->query('SELECT * FROM people WHERE fk_type = 2');

    while ($donneePeople = $people->fetch()){
    ?>
	<tr>
        <td><?= $donneePeople["firstname"]; ?></td>
        <td><?= $donneePeople["lastname"]; ?></td>
        <td><?= $donneePeople["email"]; ?></td>
        <td><?= $donneePeople["fk_company"]; ?></td>
      </tr>
    <?php
    }
    $people->closeCursor();
}