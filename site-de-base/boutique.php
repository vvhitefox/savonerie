<?php 
	include_once("header.php");
?>


<div class="row">
	<div class="col-sm-8 offset-sm-2 mt-3">
		<div class="card border">

		  	<div class="card-header align-center d-flex justify-content-center bg-success text-white">
		  	Recherche
		  	</div>

		  	<div class="card-body">
		  		<form method="post" action="controleur/affiche_produits_boutique.php">
		  			<div class="row">
					  	<select class="form-control col-sm-8" name="categorie" id="">
						    <option value="toutes">Toutes les catégories</option>
						    <option value="baume">Baume</option>
						    <option value="savon">Savon</option>
						    <option value="savon_barbe">Savons à barbe</option>
						    <option value="shampoing">Shampoing</option>
						</select>
						<input class="btn btn-outline-success col-sm-2 offset-sm-1" type="submit" value="Rechercher">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-8 offset-sm-2 mt-3">
		<div class="row">

		<?php 
		if (isset($_SESSION['produits'])){
			
			affiche_tableau_produits($_SESSION['produits']);
			
		}
		unset($_SESSION['produits']);

		?>
		</div>
	</div>
</div>

<?php include_once("footer.php"); ?>

