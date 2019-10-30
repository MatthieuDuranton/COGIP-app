<?php 
$username_empty = $password_empty = $username_err = $session_err = "";
$username = $_POST["$username"];
$password = $_POST["$password"];
connection($username,$password);
?>
<form method="post" action="">
    <div class="row">
        <div class="form-group col-md-6">
            <label for="firstname">Username :</label>
            <input type="text" class="form-control" name="username" placeholder="ex: Jean">
            <?php echo $username_empty ?>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="firstname">Password :</label>
            <input type="text" class="form-control" name="password" placeholder="ex: Jean">
            <?php echo $password_empty ?>
        </div>
    </div>
    <div class="form-group text-center">
        <input type="submit" name="send">
    </div>
</form>