<?php /*
<div class = "row text-center mt-4">
        <div class="col-12">
            <div class = text-center>
                <h4>Modifier les données <?= $type ?> </h4>
            </div>

            <?php feedback($send_success); ?>

            <form method="POST" action="">
              <div class="row">
                <div class="form-group col-3">
                  <label for="i1"><?= $t1 ?></label>
                  <input class="form-control" type="text" name="fname" placeholder=<?= $q1 ?> value="<?php echo $fname; ?>">
                  <span> <?php echo $fname_Err;?></span>
                </div>

                <div class="form-group col-3">
                  <label for="i2"><?= $t2 ?></label>
                  <input class="form-control" type="text" name="lname" placeholder=<?= $q2 ?> value="<?php echo $lname; ?>">
                  <span> <?php echo $lname_Err;?></span>
                </div>

                <div class="form-group col-3">
                  <label for="i3"><?= $t2 ?></label>
                  <select class="form-control" name="company">
                    <?php fkOption('company','id_company, company_name'); ?>
                  </select>
                  <span> <?php echo $company_Err;?></span>
                </div>

                <div class="form-group col-3">
                  <label for="i3"><?= $t2 ?></label>
                  <select class="form-control" name="company">
                    <?php fkOption('company','id_company, company_name'); ?>
                  </select>
                  <span> <?php echo $company_Err;?></span>
                </div>

                <div class="form-group col-3">
                  <label for="email">E-mail</label>
                  <input class="form-control" type="text" name="email" placeholder="E-mail" value="<?php echo $email; ?>">
                  <span> <?php echo $email_Err;?></span>
                </div>

                <div class="form-group col-3">
                  <label for="i3"><?= $t2 ?></label>
                  <select class="form-control" name="company">
                    <?php fkOption('company','id_company, company_name'); ?>
                  </select>
                  <span> <?php echo $company_Err;?></span>
                </div>


                <div class="form-group col-12">
                  <input type="submit" value="Envoyer" class="btn btn-primary btn-lg">
                </div>
              </div>
            </form>
        </div>
    </div>
*/ ?>

