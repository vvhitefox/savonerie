<?php

include "../bdd/bdd.php";
include "../modele/produits.php";


$i = 0;

foreach ($_SESSION['panier'] as $val) {
	if ( $val['produit']['id_produits'] == $_POST['id'] ){
		$_SESSION['panier'][$i]['quantite'] = $_POST['quantite'];;
		break;
	}
	$i++;
}

header('Location: ../panier.php');