<form method="POST" action=''>
    <div class = "row text-center mt-4">
        <div class="col-12">
            <div class = text-center>
                <h4>Ajouter une société</h4>
            </div>
            <table>
                <tr>
                    <th>Nom</th>
                    <th>N° de TVA</th>
                    <th>Nationalité</th>
                    <th>Type de relations</th>
                </tr>
                <tr>
                    <th>
                        <input class="form-control" type="text" name="name_company" value = <?php echo $name_company?>>
                        <span> <?php echo $notfill_Err;?></span>
                    </th>
                    <th>
                        <input class="form-control" type="text" name="vat" value = <?php echo $vat?>>
                        <span> <?php echo $notfill_Err;?></span>
                    </th>
                    <th>
                        <select class="form-control" name="country">
							<?php fkOption("country","id_country, country_name");?>
						</select>
                        <span> <?php echo $notfill_Err;?></span>
                    </th>
                    <th>
                        <select name="type" class="form-control" >
                            <?php fkOption("type","id_type, type_name");?>
                        </select>
                        <span> <?php echo $notfill_Err;?></span>
                    </th>
                </tr>
            </table>
        </div>
    </div>

    <div class="col-12 text-center mt-2">
        <p><?= $send_success; ?></p>
    </div>

    <div class = "col-12 text-center mt-2">
        <input type="submit" value="submit" class="btn btn-primary btn-lg">
    </div>
</form>
