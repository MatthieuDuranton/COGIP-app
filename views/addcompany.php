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
                        <input class="form-control" type="text" name="tva" value = <?php echo $tva?>>
                        <span> <?php echo $notfill_Err;?></span>
                    </th>
                    <th>
                        <input class="form-control" type="text" name="nationalité" value = <?php echo $nationalité?>>
                        <span> <?php echo $notfill_Err;?></span>
                    </th>
                    <th>
                        <select name="role" class="form-control" >
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
        <input type="submit" value="submit">
    </div>
</form>