<?php
include "../bdd/bdd.php";
include "../modele/produits.php";

$id = $_POST['id'];
$quantite = $_POST['quantite'];

ajoute_produit_panier($id,$quantite);

header('Location: ../boutique.php');
?>