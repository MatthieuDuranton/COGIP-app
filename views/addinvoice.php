<form method="POST" action=''>
    <div class = "row text-center mt-4">
        <div class="col-12">
            <div class = text-center>
                <h4>Ajouter une facture</h4>
            </div>
            <table class="table">
                <tr>
                    <th>Référence</th>
                    <th>Société</th>
                    <th>Date d'émission</th>
                    <th>Personne de contact</th>
                </tr>
                <tr>
                    <th>
                        <input class="form-control" type="text" name="reference" value = <?php echo "$ref"?>>
                        <span> <?php echo $ref_Err;?></span>
                    </th>
                    <th>
                        <select class="form-control" name="company">
                        <?php fkOption('company', 'id_company, company_name');?>
                        </select>
                        <span> <?php echo $company_Err;?></span>
                    </th>
                    <th>
                        <input class="form-control" type="date" name="emissiondate" value = <?php echo "$date"?>>
                        <span> <?php echo $date_Err;?></span>
                    </th>
                    <th>
                        <select class="form-control" name="contact"?>
                        <?php fkOption('people', 'id_people, firstname, lastname');?>
                        </select>
                        <span> <?php echo $contact_Err;?></span>
                    </th>
                </tr>
            </table>
        </div>
    </div>

    <div class="col-12 text-center mt-2">
        <p><?= $send_success; ?></p>
    </div>

    <div class = "col-12 text-center mt-2">
        <input type="submit" value="submit">
    </div>
</form>
