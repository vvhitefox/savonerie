<?php
	// Include des fichiers de la base de données

	include_once "bdd/bdd.php";
  	include_once "bdd/produits.php";

  	// Include des modèles 
  	include_once "modele/produits.php";

  	// Création des tableas dans la base de données

 	cree_table_produits();

?>
<!doctype html>
<html lang="fr">
 <meta charset="utf-8">
  <title>Titre de la page</title>

  <!-- CSS Bootstrap -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Fichier CSS -->

  <link rel="stylesheet" href="bootstrap/css/style.css">

</head>
<body>

<header class="background-vert d-flex align-items-center">
	<div class="col-12 text-white text-center justify-content-center">
		Le vrai sens
	</div>
</header>


<div class="corps-page container bg-white col-sm-8 offset-sm-2 pt-3">

	<div class="row col-sm-10 offset-sm-1 border rounded background-vert d-flex align-items-center">

		<div class="col text-center">
			<a class="text-white" href="accueil.php"> Accueil </a>
		</div>

		<div class="col text-center">
			<a class="text-white" href="boutique.php"> Boutique </a>
		</div>

		<div class="col text-center">
			<div class="dropdown show">
				<a class="btn btn-secondary dropdown-toggle btn-success" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					A propos 
				</a>

				<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
				    <a class="dropdown-item" href="a_propos.php">Historique</a>
				    <a class="dropdown-item" href="mdf.php">Méthodes de fabrication</a>
				    <a class="dropdown-item" href="contact.php">Nous contacter</a>
			  	</div>
			</div>
		</div>

		<div class="col text-center">
			<a class="text-white" href="admin_index.php"> Admin </a>
		</div>

	</div>



<!---------------------------------------->

