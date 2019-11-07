<div class = "row text-center mt-4">
        <div class="col-12">
            <div class = text-center>
                <h4>Ajouter un contact</h4>
            </div>

            <?php feedback($send_success); ?>

            <form method="POST" action="">
              <div class="row">
                <div class="form-group col-3">
                  <label for="userName">Nom d'utilisateur</label>
                  <input class="form-control" type="text" name="userName" placeholder="Nom d'utilisateur" value="<?php echo $username; ?>">
                  <span> <?php echo $username_Err;?></span>
                </div>

                <div class="form-group col-3">
                  <label for="password">Mot de passe</label>
                  <input class="form-control" type="text" name="password" placeholder="Mot de passe" value="<?php echo $password; ?>">
                  <span> <?php echo $password_Err;?></span>
                </div>

                <div class="form-group col-3">
                  <label for="email">Email</label>
                  <input class="form-control" type="text" name="email" placeholder="E-mail" value="<?php echo $email; ?>">
                  <span> <?php echo $email_Err;?></span>
                </div>

                <div class="form-group col-3">
                  <label for="fname">Prenom</label>
                  <input class="form-control" type="text" name="fname" placeholder="Prénom" value="<?php echo $fname; ?>">
                  <span> <?php echo $fname_Err;?></span>
                </div>

                <div class="form-group col-3">
                  <label for="fname">Nom de famillle</label>
                  <input class="form-control" type="text" name="lname" placeholder="Nom de famille" value="<?php echo $lname; ?>">
                  <span> <?php echo $lname_Err;?></span>
                </div>

                <div class="form-group col-3">
                  <label for="fk_role">Role</label>
                  <select class="form-control" name="fk_role">
                     
                  </select>
                </div>

                <div class="form-group col-12">
                  <input type="submit" value="Envoyer" class="btn btn-primary btn-lg">
                </div>
              </div>
            </form>
        </div>
    </div>