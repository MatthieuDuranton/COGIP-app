<div class="row">
    <div class="form-group col-md-6">
        <h2><?php welcome(); ?></h2>
    </div>
</div>
<form method="POST" action=''>
    <div class = "row text-center mt-4">
        <div class="col-12">
            <div class = text-center>
                <h4>Ajouter un contact</h4>
            </div>
            <table>
                <tr>
                    <th>Prénom</th>
                    <th>Nom de famille</th>
                    <th>Email</th>
                    <th>Société</th>
                </tr>
                <tr>
                    <th>
                        <input class="form-control" type="text" name="fname" value = <?php echo "$fname"?>>
                        <span> <?php echo $notfill_Err;?></span>
                    </th>
                    <th>
                        <input class="form-control" type="text" name="lname" value = <?php echo "$lname"?>>
                        <span> <?php echo $notfill_Err;?></span>
                    </th>
                    <th>
                        <input class="form-control" type="email" name="email" value = <?php echo "$email"?>>
                        <span> <?php echo $notfill_Err;?></span>
                    </th>
                    <th>
                        <input class="form-control" type="text" name="company" value = <?php echo "$company"?>>
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