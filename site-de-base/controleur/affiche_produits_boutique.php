<?php
include "../bdd/bdd.php";
include "../modele/produits.php";

// On récupère le choix qui a été récupéré dans la liste déroulante

if (isset($_POST['categorie'])){
	$categorie = $_POST['categorie'];
}

// On récupère le texte qui a été rentré dans la barre de recherche

if (isset($_POST['recherche'])){
	$recherche = $_POST['recherche'];
}

// On récupère le tableau de produit qui a été retourné grâce au choix de la liste déroulante

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

// On regarde si du texte est rentré dans la barre de recherche, si oui, on applique un filtre pour ne récupérer que les
// les résultats qui ont comme nom ce qui a été mis dans la barre de recherche

if ( $recherche != '' ){
	$_SESSION['produits'] = recup_liste_tri_nom($_SESSION['produits'], $recherche);
}

header('Location: ../boutique.php');
?>