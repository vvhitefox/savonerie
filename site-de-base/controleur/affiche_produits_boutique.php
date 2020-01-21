<?php
include "../bdd/bdd.php";
include "../modele/produits.php";


if (isset($_POST['categorie'])){
	$categorie = $_POST['categorie'];
}

if ($categorie == 'savon'){
	$_SESSION['produits'] = recup_liste_savon();
}

else if ($categorie == 'baume'){
	$_SESSION['produits'] = recup_liste_baume();
}

else if ($categorie == 'shampoing'){
	$_SESSION['produits'] = recup_liste_shampoing();
}

else if ($categorie == 'savon_barbe'){
	$_SESSION['produits'] = recup_liste_savon_barbe();
}

else if ($categorie == 'toutes'){
	$_SESSION['produits']= recup_liste_produits();
}

header('Location: ../boutique.php');
?>