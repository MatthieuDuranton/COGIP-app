<div class="row">
    <div class="form-group col-md-6">
        <h2><?php welcome(); ?></h2>
    </div>
</div>

<div class = "row text-center mt-4">
    <div class="col-12">
        <div class = text-center>
            <h4>Fournisseurs</h4>
        </div>
        <div class = text-center>
            <h5><a href="">Ajouter un Fournisseur</a></h5>
        </div>
        <table>
            <tr>
                <th>Nom</th>
                <th>N° de TVA</th>
                <th>Nationalité</th>
                <th>Modifier</th>
                <th>Effacer</th>
            </tr>
            <?=lastContact();?>
        </table>
    </div>
</div>