<form method="POST" action=''>
    <div class = "row text-center mt-4">
        <div class="col-12">
            <div class = text-center>
                <h4>Sociétés</h4>
            </div>
            <?php if($role == 1){?>
            <div class = text-center>
                <h5><a href="?action=addcompany">Ajouter une Société</a></h5>
            </div>
            <?php } ?>
            <table class="table">
                <tr>
                    <th>Nom</th>
                    <th>N° de TVA</th>
                    <th>Nationalité</th>
                    <th>Type de relations</th>
                    <th>Détails</th>
                    <?php if($role == 1){?>
                    <th>Modifier</th>
                    <th>Effacer</th>
                    <?php } ?>
                </tr>
                <?php companies(); ?>
            </table>
        </div>
    </div>
</form>
