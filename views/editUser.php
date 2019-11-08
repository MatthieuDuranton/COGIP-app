<div class = "row text-center mt-4">
        <div class="col-12">
            <div class="text-center">
                <h4>Modifier un contact</h4>
            </div>

            <?php feedback($send_success); ?>

            <form method="POST" action="">
              <div class="row">
                <div class="form-group col-3">
                  <label for="userName">Nom d'utilisateur</label>
                  <input class="form-control" type="text" name="username" placeholder="Nom d'utilisateur" value="<?php echo $q1; ?>">
                  <span> <?php echo $username_Err;?></span>
                </div>

                <div class="form-group col-3">
                  <label for="password">Mot de passe</label>
                  <input class="form-control" type="password" name="password" placeholder="Mot de passe" value="<?php echo $q2; ?>">
                  <span> <?php echo $password_Err;?></span>
                </div>

                <div class="form-group col-3">
                  <label for="email">Email</label>
                  <input class="form-control" type="email" name="email" placeholder="E-mail" value="<?php echo $q5; ?>">
                  <span> <?php echo $email_Err;?></span>
                </div>

                <div class="form-group col-3">
                  <label for="fname">Prenom</label>
                  <input class="form-control" type="text" name="fname" placeholder="Prénom" value="<?php echo $q3; ?>">
                  <span> <?php echo $fname_Err;?></span>
                </div>

                <div class="form-group col-3">
                  <label for="fname">Nom de famille</label>
                  <input class="form-control" type="text" name="lname" placeholder="Nom de famille" value="<?php echo $q4; ?>">
                  <span> <?php echo $lname_Err;?></span>
                </div>

                <div class="form-group col-3">
                  <label for="role">Role</label>
                  <select class="form-control" name="role">
                    <?php fkOption('role','id_role, role_name', $q6); ?>
                  </select>
                </div>

                <div class="form-group col-12">
                  <input type="submit" value="Envoyer" class="btn btn-lg">
                </div>
              </div>
            </form>
        </div>
    </div>
