<div class="row">
    <div class="form-group col-md-6">
        <h2><?php welcome(); ?></h2>
    </div>
</div>

<div class = "row text-center mt-4">
    <div class="col-12 col-md-4">
        <div class = text-center>
            <h4><a href="">Voir tous les contacts</a></h4>
        </div>
        <table>
            <tr>
                <th>Prénom</th>
                <th>Nom de famille</th>
                <th>Email</th>
                <th>Société(s)</th>
            </tr>
            <?=lastContact();?>
        </table>
    </div>

    <div class="col-12 col-md-4">
        <div class = text-center>
            <h4><a href="">Voir toutes les factures</a></h4>
        </div>
        <table>
            <tr>
                <th>Référence</th>
                <th>Société</th>
                <th>Date d'émission'</th>
                <th>Personne de contact</th>
            </tr>
            <?=lastInvoice();?>
        </table>
    </div>

    <div class="col-12 col-md-4">
        <div class = text-center>
            <h4><a href="">Voir toutes les sociétés</a></h4>
        </div>
        <table>
            <tr>
                <th>Nom</th>
                <th>N° de TVA</th>
                <th>Nationalité</th>
                <th>Type de relations</th>
            </tr>
            <?=lastCompany();?>
        </table>
    </div>
</div>

<div class = "row text-center mt-4">
    <div class="col-6">
        <h4><a href="">Voir tous les fournisseurs</a></h4>
    </div>
    <div class="col-6">
        <h4><a href="">Voir tous les clients</a></h4>
    </div>
</div>
