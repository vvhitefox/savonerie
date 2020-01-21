<?php
	
	// Include des fichiers de la base de données

	include_once "bdd/bdd.php";
  	include_once "bdd/produits.php";

  	// Création des tableas dans la base de données

 	cree_table_produits();

?>
<!doctype html>
<html lang="fr">
 <meta charset="utf-8">
  <title>Titre de la page</title>

  <!-- CSS Bootstrap -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

<div class="col-12 text-center bg-success text-white">
	Le vrai sens
</div>

<div class="row col-sm-8 offset-sm-2 border rounded bg-">

	<div class="col text-center">
		<a href="boutique.php"> Boutique </a>
	</div>

	<div class="col text-center">
		<a href="mdf.php"> Méthodes de fabrication </a>
	</div>
	
	<div class="col text-center">
		<a href="accueil.php"> Accueil </a>
	</div>

	<div class="col text-center">
		<a href="contact.php"> Nous contacter </a>
	</div>
	
	<div class="col text-center">
		<a href="a_propos.php"> A propos </a>
	</div>

	<div class="col text-center">
		<a href="admin.php"> Admin </a>
	</div>

</div>



<!---------------------------------------->

