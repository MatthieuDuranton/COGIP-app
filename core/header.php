<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?= $title; ?> - COGIP</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=VT323&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<main class="container">
	<header class="text-center">
		<div class="row">
			<div class="col-sm-3">
				<img src="https://thumbs.gfycat.com/WeakParallelCanadagoose-max-1mb.gif" />
			</div>
			<div class="col-sm-9">
				<h1>COGIP APP</h1>
			</div>
		</div>

<?php if(isset($_SESSION['logged']) && $_SESSION['logged'] == true){ ?>
	<div class="col-12">
		<ul class="nav justify-content-center">
			<li class="nav-item">
				<a class="nav-link" href="?action=dashboard">Tableau de bord</a>
			</li>

			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Factures
				</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="?action=invoices">Liste</a>
					<?php
						if($role == 1){
					?>
						<a class="dropdown-item" href="?action=addinvoice">Ajouter</a>
					<?php
						}
					?>
				</div>
			</li>

			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Contacts
				</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="?action=people">Liste</a>
					<?php
						if($role == 1){
					?>
						<a class="dropdown-item" href="?action=addpeople">Ajouter</a>
					<?php
						}
					?>
				</div>
			</li>

			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Sociétés
				</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="?action=companies">Liste</a>
					<?php
						if($role == 1){
					?>
						<a class="dropdown-item" href="?action=addcompany">Ajouter</a>
					<?php
						}
					?>
				</div>
			</li>

			<?php
				if($role == 1){
			?>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Utilisateurs
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="?action=user">Liste</a>
						<a class="dropdown-item" href="?action=adduser">Ajouter</a>
					</div>
				</li>
			<?php
				}
			?>

			<li class="nav-item">
				<a class="nav-link" href="?action=logout">Déconnexion</a>
			</li>
		</ul>
	</div>
<?php } ?>
	</header>

	<?php if(isset($_SESSION['logged']) && $_SESSION['logged'] == true){ ?>
	<div class="row">
	    <div class="col-12">
	        <h2 class="text-center"><?php welcome(); ?></h2>
	    </div>
	</div>
	<?php } ?>
