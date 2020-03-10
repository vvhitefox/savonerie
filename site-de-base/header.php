<?php
	// Include des fichiers de la base de données

	include_once "bdd/bdd.php";
  	include_once "bdd/produits.php";

  	// Include des modèles 
  	include_once "modele/produits.php";

  	// Création des tableas dans la base de données

 	cree_table_produits();
  cree_table_newsletter();

?>

<!doctype html>
<html lang="fr">
<head>
 <meta charset="utf-8">
  <title>Titre de la page</title>

  <!-- CSS Bootstrap -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


  <!-- Fichier CSS -->

  <link rel="stylesheet" href="bootstrap/css/style.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- SCRIPTS -->

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

  <script src="js/mollie.js"></script>

</head>
<body>

<div class="container-fluid sticky-top shadow">
  <div class="row bg-white">
    <div class="col-lg-8 offset-lg-2">
      <nav class="navbar navbar-expand-lg navbar-dark" >

        <a class="navbar-brand text-dark" href="accueil.php">Le Vrai Sens</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link text-dark" href="boutique.php">BOUTIQUE</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              A PROPOS
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="a_propos.php">HISTORIQUE</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="mdf.php">METHODES DE FABRICATION</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="contact.php">NOUS CONTACTER</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="admin/admin_index.php">ADMINISTRATEUR</a>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li> <a href="panier.php"> <i class="fas fa-shopping-cart fa-2x text-dark" style="color: white; vertical-align: bottom;"></i><span class="badge badge-success"><?php echo nombre_articles_panier() ;?></span> </a> </li>
          </ul>

        </div>
      </nav>
    </div>
  </div>
</div>

<div class="corps-page container-fluid">

<!---------------------------------------->

