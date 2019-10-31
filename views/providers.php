<div class="row">
    <div class="form-group col-md-6">
        <h2><?php welcome(); ?></h2>
    </div>
</div>

<form method="POST" action=''>
    <div class = "row text-center mt-4">
        <div class="col-12">
            <?php if($role == 1 OR 2){?>
            <div class = text-center>
                <h4>Fournisseurs</h4>
            </div>
            <?php } ?>
            <div class = text-center>
                <h5><a href="">Ajouter un Fournisseur</a></h5>
            </div>
            <table>
                <tr>
                    <th>Nom</th>
                    <th>N° de TVA</th>
                    <th>Nationalité</th>
                    <?php if($role == 1){?>
                    <th>Modifier</th>
                    <th>Effacer</th>
                    <?php } ?>
                </tr>
                <?php providers(); ?>
            </table>
        </div>
    </div>
</form>