    <div class = "row text-center mt-4">
        <div class="col-12">
            <div class = text-center>
                <h4>Ajouter une facture</h4>
            </div>

            <?php feedback($send_success); ?>

            <form method="POST" action="">
              <div class="row">
                <div class="form-group col-3">
                  <label for="reference">Référence</label>
                  <input class="form-control" type="text" name="reference" placeholder="Référence" value="<?php echo $ref; ?>">
                  <span> <?php echo $ref_Err;?></span>
                </div>

                <div class="form-group col-3">
                  <label for="company">Société</label>
                  <select class="form-control" name="company">
                    <?php fkOption('company', 'id_company, company_name');?>
                  </select>
                  <span> <?php echo $company_Err;?></span>
                </div>

                <div class="form-group col-3">
                  <label for="emissiondate">Date d'émission</label>
                  <input class="form-control" type="date" name="emissiondate" placeholder="Date d'émission" value="<?php echo $date; ?>">
                  <span> <?php echo $date_Err;?></span>
                </div>

                <div class="form-group col-3">
                  <label for="contact">Personne de contact</label>
                  <select class="form-control" name="contact">
                    <?php fkOption('people', 'id_people, firstname, lastname');?>
                  </select>
                  <span> <?php echo $contact_Err;?></span>
                </div>

                <div class="form-group col-12">
                  <input type="submit" value="Envoyer" class="btn btn-primary btn-lg">
                </div>
              </div>
            </form>
        </div>
    </div>
</form>
