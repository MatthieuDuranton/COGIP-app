<div class="row">
    <div class="form-group col-md-6">
        <h2><?php welcome(); ?></h2>
    </div>
</div>

<form method="POST" action=''>
    <div class = "row text-center mt-4">
        <div class="col-12">
            <div class = text-center>
                <h4>Contact</h4>
            </div>
            <?php if($role == 1 OR 2){?>
            <div class = text-center>
                <h5><a href="">Ajouter un contact</a></h5>
            </div>
            <?php } ?>
            <table>
                <tr>
                    <th>Prénom</th>
                    <th>Nom de famille</th>
                    <th>Email</th>
                    <th>Société(s)</th>
                    <?php if($role == 1){?>
                    <th>Modifier</th>
                    <th>Effacer</th>
                    <?php } ?>
                </tr>
                <?php contacts(); ?>
            </table>
        </div>
    </div>
</form>