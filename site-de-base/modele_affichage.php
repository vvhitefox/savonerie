<?php

function affiche_grille() {

	global $bdd; 

	$sql = "SELECT idsavon, nom, reference, prix, ingredients FROM savon WHERE idsavon = $id";
	$resultat = [];
	$res = mysqli_query($bdd,$sql);
	$row = mysqli_fetch_assoc($res);
	$resultat = [ 	"idsavon" => $row['idsavon'] , 
					"nom" => $row['nom'], 
					"reference" => $row['reference'],
					"prix" => $row['prix'],
					"ingredients" => $row['ingredients']
				];

	return $resultat;
}

?>
