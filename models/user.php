<?php
//définir fonction client pour afficher ceux de la base de donnée
function showUser(){

    global $db;
    global $role;

    $modifUser = $db->query('SELECT * FROM user');

    while ($donneeUsers = $modifUser->fetch()){
    ?>
	<tr>
        <td><?= $donneeUsers["firstname"]; ?></td>
        <td><?= $donneeUsers["lastname"]; ?></td>
        <td><?= $donneeUsers["email"]; ?></td>
        <?php if($role == 1){ ?>
		<td><a href="?action=edit&type=user&id=<?= $donneeUsers["id_user"]; ?>"><i class="fas fa-pen"></i></td>
        <td><a href="?action=edit&type=user&id=<?= $donneeUsers["id_user"]; ?>"><i class="fas fa-times"></i></td>
        <?php } ?>
      </tr>
    <?php
    }
    $modifUser->closeCursor();
}

function showLastConnected(){

    global $db;
    $req = $db->query('SELECT firstname, lastname FROM user WHERE last_connected > CURRENT_TIMESTAMP - 300 ');

    while ($lastConnected = $req->fetch()){
    ?>
        <li><?= $lastConnected["firstname"]; ?> <?= $lastConnected["lastname"]; ?></li>
    <?php
    }
    $req->closeCursor();
}

// Delete
function deleteUser(){

    global $db;
    $id = $_GET['id'];

    $req = $db->exec("DELETE FROM user WHERE id_user = ".$id);

}
