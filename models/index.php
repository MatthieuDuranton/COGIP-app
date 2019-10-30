<?php
//
$req = $conn->prepare('SELECT * FROM student WHERE username = :username');
$req->execute(array('username' => $username));
$res = $req->fetch();
if(password_verify($password, $res["password"])){
    session_start();
    $_SESSION["username"] = $res["username"];//je lie les infos à la session pour pouvoir l'utiliser sur d'autres pages une fois connecté
    $_SESSION['email'] = $res["email"];
    $_SESSION['first_name'] = $res["first_name"];
    $_SESSION['last_name'] = $res["last_name"];
    $_SESSION['linkedin'] = $res["linkedin"];
    $_SESSION['github'] = $res["github"];
    $_SESSION['id'] = $res["id"];
    $_SESSION["logged"] = true;
