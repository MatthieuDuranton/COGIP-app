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
        <td><?= $donneeUsers["password"]; ?></td>
        <td><?= $donneeUsers["email"]; ?></td>
        <?php if($role == 1){ ?>
		<td><a href="?action=edit&type=user&id=<?= $donneeUsers["id"]; ?>"><i class="fas fa-pen"></i></td>
        <td><a href="?action=edit&type=user&id=<?= $donneeUsers["id"]; ?>"><i class="fas fa-times"></i></td>
        <?php } ?>
      </tr>
    <?php
    }
    $modifUser->closeCursor();
}

// Je place ici mes requetes Update et Delete vu que la page edit n'est pas encore créée...

//Update.
function updateUser(){

    global $db;
    $firstname = $lastname = $password = $email = $donneeUsers = "";

    $req = $db -> prepare("UPDATE user SET prenom = :firstname, nom = :lastname, pwd = :password, email = :email WHERE ID =".$donneeUsers["id"]."");
    $req = execute(array(

        'prenom' => $firstname,
        'nom' => $lastname,
        'pwd' => $password,
        'email' => $email
    ));
}
// Delete
function deleteUser(){

    global $db;
    $donneeUsers = "";

    $req = $db -> exec("DELETE FROM user WHERE ID = ".$donneeUsers["id"]."");

}
