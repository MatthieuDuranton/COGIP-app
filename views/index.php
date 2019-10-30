<form method="post" action="">
    <div class="row">
        <div class="form-group col-md-6">
            <label for="username">Nom d'utilisateur :</label>
            <input type="text" class="form-control" name="username" placeholder="ex: Jean">
            <?= $username_empty; ?>
            <?= $username_err; ?>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="password">Mot de passe :</label>
            <input type="password" class="form-control" name="password" placeholder="ex: Jean">
            <?= $password_empty; ?>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <?= $session_err; ?>
        </div>
    </div>
    <div class="form-group text-center">
        <input type="submit" name="send">
    </div>
</form>
