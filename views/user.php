<form method="POST" action=''>
    <div class = "row text-center mt-4">
        <div class="col-12">
            <div class = text-center>
                <h4>Ajouter / Modifier les utilisateurs</h4>
            </div>
            <?php if($role == 1 OR 2){?>
            <div class = text-center>
                <h5><a href="?action=adduser">ajouter un utilisateur.</a></h5>
            </div>
            <?php } ?>
            <table class="table">
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>password</th>
                    <th>Email</th>
                    <?php if($role == 1){?>
                    <th>Modifier</th>
                    <th>Effacer</th>
                    <?php } ?>
                </tr>
                <?php showUser(); ?>
            </table>
        </div>
    </div>
</form>