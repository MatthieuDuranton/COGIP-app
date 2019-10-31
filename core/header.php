<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?= $title; ?> - COGIP</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
<main class="container">
	<header>
		<h1>COGIP APP</h1>
<?php if($_SESSION['logged']){ ?>
		<ul class="nav justify-content-center">
			<li class="nav-item">
				<a class="nav-link" href="?action=dashboard">Tableau de bord</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="?action=logout">Déconnexion</a>
			</li>
		</ul>
<?php } ?>
	</header>
