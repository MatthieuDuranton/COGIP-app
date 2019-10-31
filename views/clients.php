<form method="POST" action=''>
    <div class = "row text-center mt-4">
        <div class="col-12">
            <div class = text-center>
                <h4>Clients</h4>
            </div>
            <?php if($role == 1 OR 2){?>
            <div class = text-center>
                <h5><a href="">Ajouter un Client</a></h5>
            </div>
            <?php } ?>
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
                <?php clients(); ?>
            </table>
        </div>
    </div>
</form>