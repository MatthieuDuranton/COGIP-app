<form method="post" action="">
    <div class="row">
        <div class="form-group col-md-6">
            <label for="username">Nom d'utilisateur :</label>
            <input type="text" class="form-control" name="username" placeholder="ex: Jean" value='<?php echo $username ?>'>
            <?= $username_empty = $username_empty ?? NULL; ?>
            <?= $username_err = $username_err ?? NULL; ?>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="password">Mot de passe :</label>
            <input type="password" class="form-control" name="password" placeholder="ex: Jean" value='<?php echo $password ?>'>
            <?= $password_empty = $password_empty ?? NULL; ?>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <?= $session_err = $session_err ?? NULL; ?>
        </div>
    </div>
    <div class="form-group text-center">
        <input type="submit" name="send">
    </div>
</form>
