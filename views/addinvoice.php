<form method="POST" action=''>
    <div class = "row text-center mt-4">
        <div class="col-12">
            <div class = text-center>
                <h4>Ajouter une facture</h4>
            </div>
            <table>
                <tr>
                    <th>Référence</th>
                    <th>Société</th>
                    <th>Date d'émission</th>
                    <th>Personne de contact</th>
                </tr>
                <tr>
                    <th>
                        <input class="form-control" type="text" name="reference" value = <?php echo "$reference"?>>
                        <span> <?php echo $notfill_Err;?></span>
                    </th>
                    <th>
                        <input class="form-control" type="text" name="company" value = <?php echo "$company"?>>
                        <span> <?php echo $notfill_Err;?></span>
                    </th>
                    <th>
                        <input class="form-control" type="text" name="emissiondate" value = <?php echo "$emissiondate"?>>
                        <span> <?php echo $notfill_Err;?></span>
                    </th>
                    <th>
                        <input class="form-control" type="text" name="contact" value = <?php echo "$contact"?>>
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