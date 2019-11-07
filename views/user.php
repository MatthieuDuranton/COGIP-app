<form method="POST" action=''>
    <div class = "row text-center mt-4">
        <div class="col-12">
            <div class="text-center">
                <h4>Ajouter / Modifier les utilisateurs</h4>
            </div>
            <?php if($role == 1){?>
            <div class="text-center">
                <h5><a href="?action=adduser">Ajouter un utilisateur</a></h5>
            </div>
            <?php } ?>

			<div class="row">
				<div class="col-md-8">
					<h5>Liste des utilisateurs</h5>
					<table class="table">
		                <tr>
		                    <th>Nom</th>
		                    <th>Prenom</th>
		                    <th>Email</th>
		                    <?php if($role == 1){?>
		                    <th>Modifier</th>
		                    <th>Effacer</th>
		                    <?php } ?>
		                </tr>
		                <?php showUser(); ?>
		            </table>
				</div>
				<div class="col-md-4">
					<h5>Connectés il y a 5 minutes</h5>
					<ul>
						<?php showLastConnected(); ?>
					</ul>
				</div>
			</div>
        </div>
    </div>
</form>
