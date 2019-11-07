<div class = "row text-center mt-4">
	<div class="col-12">
		<div class = text-center>
			<h4>Modifier un contact</h4>
		</div>

		<?php feedback($send_success); ?>

		<form method="POST" action="">
		  <div class="row">
			<div class="form-group col-3">
			  <label for="fname">Prénom</label>
			  <input class="form-control" type="text" name="fname" placeholder="Prénom" value="<?php echo $q1; ?>">
			  <span> <?php echo $fname_Err;?></span>
			</div>

			<div class="form-group col-3">
			  <label for="lname">Nom de famille</label>
			  <input class="form-control" type="text" name="lname" placeholder="Nom de famille" value="<?php echo $q2; ?>">
			  <span> <?php echo $lname_Err;?></span>
			</div>

			<div class="form-group col-3">
			  <label for="email">E-mail</label>
			  <input class="form-control" type="text" name="email" placeholder="E-mail" value="<?php echo $q3; ?>">
			  <span> <?php echo $email_Err;?></span>
			</div>

			<div class="form-group col-3">
			  <label for="company">Société</label>
			  <select class="form-control" name="company">
				<?php fkOption('company','id_company, company_name', $q4); ?>
			  </select>
			  <span> <?php echo $company_Err;?></span>
			</div>

			<div class="form-group col-12">
			  <input type="submit" value="Envoyer" class="btn btn-primary btn-lg">
			</div>
		  </div>
		</form>
	</div>
</div>
