<?php
function welcome($username){
    global $db;

    global $user_Fname, $user_Lname, $user_rights

    $user_Fname = $_SESSION['firstname'];
    $user_Lname = $_SESSION['lastname'];
    $user_rights = $_SESSION['fk_role'];
}