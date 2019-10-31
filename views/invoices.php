<div class="row">
    <div class="form-group col-md-6">
        <h2><?php welcome(); ?></h2>
    </div>
</div>

<form method="POST" action=''>
    <div class = "row text-center mt-4">
        <div class="col-12">
            <div class = text-center>
                <h4>Factures</h4>
            </div>
            <?php if($role == 1 OR 2){?>
            <div class = text-center>
                <h5><a href="">Ajouter une Facture</a></h5>
            </div>
            <?php } ?>
            <table>
                <tr>
                    <th>Référence</th>
                    <th>Société</th>
                    <th>Date d'émission</th>
                    <th>Personne de contact</th>
                    <?php if($role == 1){?>
                    <th>Modifier</th>
                    <th>Effacer</th>
                    <?php } ?>
                </tr>
                <?php invoices(); ?>
            </table>
        </div>
    </div>
</form>