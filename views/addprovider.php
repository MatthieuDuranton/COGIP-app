<div class="row">
    <div class="form-group col-md-6">
        <h2><?php welcome(); ?></h2>
    </div>
</div>
<form method="POST" action=''>
    <div class = "row text-center mt-4">
        <div class="col-12">
            <div class = text-center>
                <h4>Ajouter un fournisseur</h4>
            </div>
            <table>
                <tr>
                    <th>Nom</th>
                    <th>N° de TVA</th>
                    <th>Nationalité</th>
                    <th>Modifier</th>
                    <th>Effacer</th>
                </tr>
                <tr>
                    <th>
                        <input class="form-control" type="text" name="name_company" value = <?php echo "$name_company"?>>
                        <span> <?php echo $notfill_Err;?></span>
                    </th>
                    <th>
                        <input class="form-control" type="text" name="tva" value = <?php echo "$tva"?>>
                        <span> <?php echo $notfill_Err;?></span>
                    </th>
                    <th>
                        <input class="form-control" type="text" name="nationalité" value = <?php echo "$nationalité"?>>
                        <span> <?php echo $notfill_Err;?></span>
                    </th>
                    <th>
                        <input class="form-control" type="text" name="name_company" value = <?php echo "$name_company"?>>
                        <span> <?php echo $notfill_Err;?></span>
                    </th>
                </tr>
            </table>
        </div>
    </div>
</form>