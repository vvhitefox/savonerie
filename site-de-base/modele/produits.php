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

function recup_types_list() {
	global $bdd;

	$sql = "SELECT * FROM `typeproduits`";
	$resultat = [];
	$res = mysqli_query($bdd,$sql);
	$row = mysqli_fetch_assoc($res);	
	$i = 0;
	while($row = mysqli_fetch_assoc($res)){
		
	$resultat[$i] = [ 	"nom" => $row['nom'] 
					];
					$i++;
	}

	return $resultat;
}



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
					"type" => $row['type'],
					"Miseenattente" => $row['attente']
				];

	return $resultat;
}

// Cette fonction retourne une liste de tous les produits grâce à un type passé en paramètre qui sont déjà dans la base de données.
// Cette fonction réutilise la fonction recup_produit($id)

// Ne prend pas d'entrée

// Retourne un tableau avec une liste de produits
// Même format que dans la fonction recup_produit($id)



function recup_liste_produits_type($type) {

	global $bdd; 

	$sql = "SELECT * FROM produits WHERE type = '$type' AND `Mise en attente` != 1";
	$resultat = [];
	$res = mysqli_query($bdd,$sql);
	while($row = mysqli_fetch_assoc($res)){
		
		$resultat[] = recup_produit($row['id_produits']);
	}
	return $resultat;
}



// Cette fonction retourne une liste de tous les produits qui sont déjà dans la base de données.
// Cette fonction réutilise la fonction recup_produit($id)

// Ne prend pas d'entrée

// Retourne un tableau avec une liste de produits
// Même format que dans la fonction recup_produit($id)



function recup_liste_produits($admin = 0) {

	global $bdd; 
	if($admin == 1){
		$sql = "SELECT * FROM produits";
	}else{
		$sql = "SELECT * FROM produits Where `attente` != 1";
	}
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

		$sql = "SELECT * FROM produits WHERE type = 'savon' and Miseenpause = 0";
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

		$sql = "SELECT * FROM produits WHERE type = 'baume' and Miseenpause = 0 ";
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
	
		$sql = "SELECT * FROM produits WHERE type = 'shampoing' and Miseenpause = 0";
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
	
		$sql = "SELECT * FROM produits WHERE type = 'savon_barbe' and Miseenpause = 0";
		$resultat = [];
		$res = mysqli_query($bdd,$sql);
		while($row = mysqli_fetch_assoc($res)){
			$resultat[] = recup_produit($row['id_produits']);
		}
		return $resultat;
}



// Cette fonction permet de retourner une liste de produit qui contient dans son nom une chaine de 
// caractères donnée en paramètre

// Cette fonction prend en entier un tableau de produits, ainsi qu'une chaine de caractères

// Retourne un tableau avec une liste de produit
// Même format que dans la fonction recup_produit($id)



function recup_liste_tri_nom($tab, $chaine){

    // On enlêve les accents de la chaine de caractères

    $chaine= strtr(utf8_decode($chaine), utf8_decode("âäàéèëêïîôöûüùççÂÀÉÊÏÎÛ"), "aaaeeeeiioouuuccaaeeiiu");

    // On met la chaine en minuscule mieux comparer

    $chaine = strtolower($chaine);

    $resultat = [];

    foreach ($tab as $val){

        // On enlève les accents sur le nom porté par val

        $nom_produit= strtr(utf8_decode($val['nom']), utf8_decode("âäàéèëêïîôöûüùççÂÀÉÊÏÎÛ"), "aaaeeeeiioouuuccaaeeiiu");

        // On met le nom du produit de $val en minuscule pour comparer correctement
        // le nom du produit ainsi que la chaine

        $nom_produit = strtolower($nom_produit);

        if(preg_match("#". $chaine . "#", $nom_produit)){

            $resultat[] = $val;
            
        }

    }

    return $resultat;
}

// Cette fonction ajoute un produit ainsi qu'une certaine quantité de le panier de l'utilisateur

// Cette fonction prend en paramètre un entier $id qui correspond à l'identifient du produit ainsi qu'un entier $quantite

// Elle ne retourne rien, mais ajoute le ou les produits dans une variable $_SESSION attribuée à l'utilisateur

function ajoute_produit_panier($id, $quantite){

	$i = -1;
	$j = 0;

	if (isset($_SESSION['panier'])){

		foreach ($_SESSION['panier'] as $val) {
			
			if ( $id == $val['produit']['id_produits'] ){
				$i = $j;
			}

			$j++;
		}

		if ( $i == -1 ){

			$produit = recup_produit($id);
			$_SESSION["panier"][] = [
				'produit' => $produit, 
				'quantite' => $quantite
			];

		}

		else{

		$_SESSION['panier'][$i]['quantite'] = (int)$_SESSION['panier'][$i]['quantite'] + $quantite;

		}


	}

	else {

		$produit = recup_produit($id);
			$_SESSION["panier"][] = [
				'produit' => $produit, 
				'quantite' => $quantite
			];

	}

	

}

function vider_panier(){

	unset($_SESSION['panier']);

}

function affiche_panier(){

	foreach ($_SESSION['panier'] as $val) {

			echo "	<div class='card-body'>
						<h5 class='card-title'>". $val['produit']['nom'] ."</h5>
						<div class='row'>
							<div class='col-lg-3'>
								<p class='card-text'>Quantité : ". $val['quantite'] ."</p>
							</div>

							<div class='col-lg-4'>
								<form method='post' action='controlleur/modifier_quantite_article.php'>
									<div class='input-group'>
										<div class='input-group-prepend'>
										    <span class='input-group-text' id=''>Modifier</span>
										</div>
										 <input type='text' class='form-control' name='quantite' value='". $val['quantite'] ."'>
										<button type='submit' class='btn btn-outline-dark btn-sm mr-2 ml-2'><i class='fas fa-angle-right'></i></button>
									</div>
									<input type='hidden' name='id' value='". $val['produit']['id_produits'] ."'>
								</form>
							</div>
							


							<div class='col-lg-1 offset-lg-4'>
								<form method='post' action='controlleur/suppression_article_panier.php'>
									<input type='hidden' name='id' value='". $val['produit']['id_produits'] ."'>
									<button type='submit' class='btn btn-outline-dark btn-sm'><i class='fas fa-trash' style=''></i></button>
								</form>
							</div>
							
						</div>
						<div class='row'>
							<div class='col-lg-3'>
								". total_cout_article($val) ." €
							</div>
						</div>
					</div>";
		}

}

function nombre_articles_panier(){

	$res = 0;

	if(isset($_SESSION['panier'])){

		foreach ($_SESSION['panier'] as $val) {

				$res = $res + $val['quantite'];

		}

	}

	return $res;

}

function total_cout_article($case_tableau){

	$res = $case_tableau['quantite'] * $case_tableau['produit']['prix'];


	return number_format($res,2,"."," ");
}


function total_cout_panier(){

	$res = 0.00;

	foreach ($_SESSION['panier'] as $val) {
		
		$res = $res + ($val['quantite'] * $val['produit']['prix']);

	}

	return number_format($res,2,"."," ");
}




///////////////////////////////////////



// Cette fonction permet l'affichage des produits sur la page de la boutique

// Cette fonction prend en entier un tableau de produits

// Cette fonction ne retourne rien



function affiche_tableau_produits($tab){
	$i = 0;
		foreach ($tab as $val) {

			$chaine_id = (string)$val['id_produits'];

			echo "	<div class='col-lg-6 col-6 mb-3 mt-3'>
						<div class='card'>
							<a href='produit.php?id=". $chaine_id ."' >
								<img src='https://www.lepetitmarseillais.com/sites/lpm_fr/files/taco-images/le-savon-de-marseille-le-produit-authentique-qui-a-tout-bon-ihp.jpg' class='card-img-top img-fluid mx-auto d-block' alt=''> 
							</a>

							<ul class='list-group list-group-flush'>
								<li class='list-group-item text-center'>". $val['nom'] ."</li>
							</ul>
						</div>
					</div>";
		}
}

?>
