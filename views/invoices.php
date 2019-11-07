<form method="POST" action=''>
    <div class = "row text-center mt-4">
        <div class="col-12">
            <div class = text-center>
                <h4>Factures</h4>
            </div>
            <?php if($role == 1 OR 2){?>
            <div class = text-center>
                <h5><a href="?action=addinvoice">Ajouter une Facture</a></h5>
            </div>
            <?php } ?>
            <table class="table">
                <tr>
                    <th>Référence</th>
                    <th>Société</th>
                    <th>Date d'émission</th>
                    <th>Personne de contact</th>
                    <th>Détails</th>
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
