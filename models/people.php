<?php
//définir fonction people pour afficher ceux de la base de donnée
function people(){
	global $role;

    global $db;

    $people = $db->query('SELECT firstname, lastname, email, id_people AS id, company.company_name AS company FROM people INNER JOIN company ON people.fk_company = company.id_company ORDER BY id_people DESC');

    while ($donneePeople = $people->fetch()){
    ?>
	<tr>
        <td><?= $donneePeople["firstname"]; ?></td>
        <td><?= $donneePeople["lastname"]; ?></td>
        <td><?= $donneePeople["email"]; ?></td>
        <td><?= $donneePeople["company"]; ?></td>
				<td><a href="?action=viewPeople&id=<?= $donneePeople["id"]; ?>"><i class="fas fa-eye"></i></a></td>
		<?php if ($role == 1){?>
		<td><a href="?action=editPeople&type=people&id=<?= $donneePeople["id"]; ?>"><i class="fas fa-pen"></i></a></td>
        <td><a href="?action=delete&type=people&id=<?= $donneePeople["id"]; ?>"><i class="fas fa-times"></i></a></td>
        <?php } ?>
      </tr>
    <?php
    }
    $people->closeCursor();
}
