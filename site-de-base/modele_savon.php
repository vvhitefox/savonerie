<?php

// Cette fonction retourne un des savons présent dans la base de données grâce
// à un certain id donnée en entrée

// Prend en entrée
// id : int, id d'un savon

// Retourne un tableau avec: 
// idsavon : int, id d'un savon
// nom : string, nom du savon
// reference : int, référence du savon
// prix : float, prix du savon
// ingredients : string, ingrédients présent dans la composition du savon

function recup_savon($id) {

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

// Cette fonction retourne une liste de tous les savons qui sont déjà dans la base de données.
// Cette fonction réutilise la fonction recup_savon($id)

// Ne prend pas d'entrée

// Retourne un tableau avec une liste de savon
// Même format que dans la fonction recup_savon($id)

function recup_liste_savon() {

	global $bdd; 

	$sql = "SELECT idsavon FROM savon";
	$resultat = [];
	$res = mysqli_query($bdd,$sql);
	while($row = mysqli_fetch_assoc($res)){
		$resultat[] = recup_savon($row['idsavon']);
	}
	return $resultat;
}

function affiche_liste_savon() {

	$resultat = recup_liste_savon();

	echo "
	<table class='table'>
	  	<thead>
		    <tr>
		      	<th scope='col'>#</th>
		      	<th scope='col'>First</th>
		      	<th scope='col'>Last</th>
		      	<th scope='col'>Handle</th>
		    </tr>
	  	</thead>
	  	<tbody>
	";
	foreach ($resultat as $val){
		echo "
			<tr>
      			<th scope='row'>". $val['idsavon'] ."</th>
      			<td>". $val['nom'] ."</td>
      			<td>". $val['reference'] ."</td>
      			<td>". $val['prix'] ."</td>
    		</tr>
		";
	}

	echo "
	  	</tbody>
	</table>
	";
}
?>