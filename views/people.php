<form method="POST" action=''>
    <div class = "row text-center mt-4">
        <div class="col-12">
            <div class = text-center>
                <h4>Contact</h4>
            </div>
            <?php if($role == 1){?>
            <div class = text-center>
                <h5><a href="?action=addpeople">Ajouter un contact</a></h5>
            </div>
            <?php } ?>
            <table class="table">
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
                <?php people(); ?>
            </table>
        </div>
    </div>
</form>
