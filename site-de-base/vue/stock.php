

<?php  
include_once 'bdd/bdd.php';
  require("modele/produits.php");

	function isAdmin(){return true;}

  function show_stock(){
	  $returnvalue = "<table class='table'> <thead><tr> <th scope='col'>nom produit</th> <th scope='col'>prix</th> <th scope='col'>statut</th> <th scope='col'></th><th scope='col'></th> </tr></thead>";
	  
	  if(!isAdmin())
		  header("location:javascript://history.go(-1)");
	$stock = recup_liste_produits();  
	$returnvalue = $returnvalue."<tbody>";
	foreach($stock as $line){
		$returnvalue = $returnvalue."<tr>";
			$returnvalue = $returnvalue."<th>";
			$returnvalue = $returnvalue.$line["nom"];
						$returnvalue = $returnvalue."</th>";
			$returnvalue = $returnvalue."<th>";
			$returnvalue = $returnvalue.$line["prix"];
			$returnvalue = $returnvalue."</th>";
			$returnvalue = $returnvalue."<th>";
			$returnvalue = $returnvalue."disponible";
			$returnvalue = $returnvalue."</th>";
			$returnvalue = $returnvalue."<th>";
			$returnvalue = $returnvalue."<button class='btn btn-outline-warning' href='' role='button' >mettre en pause</button>";
			$returnvalue = $returnvalue."</th>";
			$returnvalue = $returnvalue."<th>";
			$returnvalue = $returnvalue."<button class='btn btn-primary' href='' role='button' >modifier</button>";
			$returnvalue = $returnvalue."</th>";
		$returnvalue = $returnvalue."</tr>";
	}
	$returnvalue = $returnvalue."</tbody>";
	$returnvalue = $returnvalue."</table>";

	return $returnvalue;
  }
	
  ?>