<div class = "row text-center mt-4">
	<div class="col-12">
		<div class="text-center">
			<h4>Modifier une société</h4>
		</div>

		<form method="POST" action="">
		  <div class="row">
			<div class="form-group col-3">
			  <label for="name_company">Nom</label>
			  <input class="form-control" type="text" name="name_company" placeholder="Nom" value="<?php echo $q1; ?>">
			  <span> <?php echo $notfill_Err; ?></span>
			</div>

			<div class="form-group col-3">
			  <label for="vat">N° de TVA</label>
			  <input class="form-control" type="text" name="vat" placeholder="N° de TVA" value="<?php echo $q2; ?>">
			  <span> <?php echo $notfill_Err; ?></span>
			</div>

			<div class="form-group col-3">
			  <label for="country">Nationalité</label>
			  <select class="form-control" name="country">
				<?php fkOption("country","id_country, country_name", $q3); ?>
			  </select>
			</div>

			<div class="form-group col-3">
			  <label for="type">Type de relations</label>
			  <select class="form-control" name="type">
				  <?php fkOption("type","id_type, type_name", $q4);?>
			  </select>
			</div>

			<div class="form-group col-12">
			  <input type="submit" value="Envoyer" class="btn btn-primary btn-lg">
			</div>
		  </div>
		</form>
	</div>
</div>
