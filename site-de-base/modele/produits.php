<?php



// Cette fonction retourne un des produits présent dans la base de données grâce
// à un certain id donnée en entrée

// Prend en entrée
// id : int, id d'un produit

// Retourne un tableau avec: 
// id_produits : int, id d'un produit
// nom : string, nom du produit
// prix : float, prix du savon
// ingredients : string, ingrédients présent dans la composition de ce produit
// descriptif : string, description de ce produit
// type : string, type du produit qui est retourné



function recup_produit($id) {

	global $bdd; 

	$sql = "SELECT * FROM produits WHERE id_produits = $id";
	$resultat = [];
	$res = mysqli_query($bdd,$sql);
	$row = mysqli_fetch_assoc($res);
	$resultat = [ 	"id_produits" => $row['id_produits'] , 
					"nom" => $row['nom'], 
					"prix" => $row['prix'],
					"ingredients" => $row['ingredients'],
					"descriptif" => $row['descriptif'],
					"type" => $row['type']
				];

	return $resultat;
}



// Cette fonction retourne une liste de tous les produits qui sont déjà dans la base de données.
// Cette fonction réutilise la fonction recup_produit($id)

// Ne prend pas d'entrée

// Retourne un tableau avec une liste de produits
// Même format que dans la fonction recup_produit($id)



function recup_liste_produits() {

	global $bdd; 

	$sql = "SELECT * FROM produits";
	$resultat = [];
	$res = mysqli_query($bdd,$sql);
	while($row = mysqli_fetch_assoc($res)){
		$resultat[] = recup_produit($row['id_produits']);
	}
	return $resultat;
}



// Cette fonction retourne une liste de tous les savons qui sont déjà dans la base de données.
// Cette fonction réutilise la fonction recup_produit($id)

// Ne prend pas d'entrée

// Retourne un tableau avec une liste de savons
// Même format que dans la fonction recup_produit($id)



function recup_liste_savon() {

		global $bdd;

		$sql = "SELECT * FROM produits WHERE type = 'savon'";
		$resultat = [];
		$res = mysqli_query($bdd,$sql);
		while($row = mysqli_fetch_assoc($res)){
			$resultat[] = recup_produit($row['id_produits']);
		}
		return $resultat;
}


// Cette fonction retourne une liste de tous les baumes qui sont déjà dans la base de données.
// Cette fonction réutilise la fonction recup_produit($id)

// Ne prend pas d'entrée

// Retourne un tableau avec une liste de baumes
// Même format que dans la fonction recup_produit($id)



function recup_liste_baume() {

		global $bdd;

		$sql = "SELECT * FROM produits WHERE type = 'baume'";
		$resultat = [];
		$res = mysqli_query($bdd,$sql);
		while($row = mysqli_fetch_assoc($res)){
			$resultat[] = recup_produit($row['id_produits']);
		}
		return $resultat;
}



// Cette fonction retourne une liste de tous les shampoings qui sont déjà dans la base de données.
// Cette fonction réutilise la fonction recup_produit($id)

// Ne prend pas d'entrée

// Retourne un tableau avec une liste de shampoings
// Même format que dans la fonction recup_produit($id)



function recup_liste_shampoing() {

		global $bdd;	
	
		$sql = "SELECT * FROM produits WHERE type = 'shampoing'";
		$resultat = [];
		$res = mysqli_query($bdd,$sql);
		while($row = mysqli_fetch_assoc($res)){
			$resultat[] = recup_produit($row['id_produits']);
		}
		return $resultat;
}



// Cette fonction retourne une liste de tous les savons de barbe qui sont déjà dans la base de données.
// Cette fonction réutilise la fonction recup_produit($id)

// Ne prend pas d'entrée

// Retourne un tableau avec une liste de savons de barbe
// Même format que dans la fonction recup_produit($id)



function recup_liste_savon_barbe() {

		global $bdd;	
	
		$sql = "SELECT * FROM produits WHERE type = 'savon_barbe'";
		$resultat = [];
		$res = mysqli_query($bdd,$sql);
		while($row = mysqli_fetch_assoc($res)){
			$resultat[] = recup_produit($row['id_produits']);
		}
		return $resultat;
}



// Cette fonction permet l'affichage des produits sur la page de la boutique

// Cette fonction prend en entier un tableau de produits

// Cette fonction ne retourne rien



function affiche_tableau_produits($tab){
	$i = 0;
		foreach ($tab as $val) {

			switch ($i) {
				case 0:
					echo "	<div class='col-sm-6 mb-3 mt-3'>
								<div class='card'>
									<img class='card-img-top' src='' alt=''>
									<div class='card-body'>
										<h5 class='card-title'> Produit</h5>
										<p class='card-text'>". $val['nom'] ."</p>
									</div>
									<ul class='list-group list-group-flush'>
										<li class='list-group-item'>Description</li>
										<li class='list-group-item'>Ingrédients</li>
									</ul>
								</div>
							</div>";
					$i = $i++;
					break;

				case 1:
						echo "	<div class='col-sm-5 mb-3 mt-3'>
									<div class='card'>
									  <img class='card-img-top' src='' alt=''>
									  <div class='card-body'>
									    <h5 class='card-title'> Produit</h5>
									    <p class='card-text'>". $val['nom'] ."</p>
									  </div>
									  <ul class='list-group list-group-flush'>
									    <li class='list-group-item'>Description</li>
									    <li class='list-group-item'>Ingrédients</li>
									  </ul>
									</div>
								</div>";
					$i = 0;
					break;
				
				default:

					break;
			}
		}
}

?>