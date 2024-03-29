<div class = "row text-center mt-4">
    <div class="col-12">
        <div class = text-center>
            <h4><a href="?action=people">Voir tous les contacts</a></h4>
        </div>
        <table class="table">
            <tr>
                <th>Prénom</th>
                <th>Nom de famille</th>
                <th>Email</th>
                <th>Société(s)</th>
            </tr>
            <?php lastContact(); ?>
        </table>
    </div>

    <div class="col-12">
        <div class = text-center>
            <h4><a href="?action=invoices">Voir toutes les factures</a></h4>
        </div>
        <table class="table">
            <tr>
                <th>Référence</th>
                <th>Société</th>
                <th>Date d'émission</th>
                <th>Personne de contact</th>
            </tr>
            <?php lastInvoice(); ?>
        </table>
    </div>

    <div class="col-12">
        <div class = text-center>
            <h4><a href="?action=companies">Voir toutes les sociétés</a></h4>
        </div>
        <table class="table">
            <tr>
                <th>Nom</th>
                <th>N° de TVA</th>
                <th>Nationalité</th>
                <th>Type de relations</th>
            </tr>
            <?php lastCompany(); ?>
        </table>
    </div>
</div>

<div class="row text-center mt-4">
    <div class="col-6">
        <h4><a href="?action=providers">Voir tous les fournisseurs</a></h4>
    </div>
    <div class="col-6">
        <h4><a href="?action=clients">Voir tous les clients</a></h4>
    </div>
</div>
