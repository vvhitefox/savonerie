<?php
include "../bdd/bdd.php";
include "../modele/produits.php";

vider_panier();

header('Location: ../panier.php');
?>