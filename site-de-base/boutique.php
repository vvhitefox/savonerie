<?php include_once("header.php"); 
unset($_SESSION['produits']);
for ( $i = 0 ; $i < 10; $i++ ){
	$_SESSION['produits'][] = [$i,'nombre'];
}
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
		$i = 0;
		

		foreach ($_SESSION['produits'] as $val) {

			switch ($i) {
				case 0:
					echo "	<div class='col-sm-6 mb-3 mt-3'>
								<div class='card'>
									<img class='card-img-top' src='' alt=''>
									<div class='card-body'>
										<h5 class='card-title'> Produit</h5>
										<p class='card-text'>". $val[0] ."</p>
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
									    <p class='card-text'>". $val[0] ."</p>
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
	?>
		</div>
	</div>
</div>

<?php include_once("footer.php"); ?>

