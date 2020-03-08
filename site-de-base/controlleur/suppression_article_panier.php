<?php

include "../bdd/bdd.php";

$i = 0;

foreach ($_SESSION['panier'] as $val) {
	if ( $val['produit']['id_produits'] == $_POST['id'] ){
		unset($_SESSION['panier'][$i]);
		break;
	}
	$i++;
}

$_SESSION['panier'] = array_merge($_SESSION['panier']);

if (count( $_SESSION['panier']) == 0){
	unset($_SESSION['panier']);
}

header('Location: ../panier.php');